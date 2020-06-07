const express = require('express');
const axios = require('axios');
const qs = require('qs');
const router = express.Router();

router.get('/tanaman', async (req, res) => {
    let listTanaman = await getTanaman(req.query);

    // Format data agar bisa digunakan
    listTanaman = listTanaman.bindings.map(listTanaman => formatTanaman(listTanaman));

    return res.status(200).json(listTanaman);
});

router.get('/tanaman/:id', async (req,res) =>{
    let listTanaman = await getTanaman(req.query);

    // Format data agar bisa digunakan
    listTanaman = listTanaman.bindings.map(listTanaman => formatTanaman(listTanaman));

    return res.status(200).json(listTanaman[req.param.id -1]);
});

  // Untuk mengambil data dari fuseki server
    const getTanaman = async (param) => {
        const headers = {
            'Accept': 'application/sparql-results+json,*/*;q=0.9',
            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
        };

        const queryData = {
            query:
            `PREFIX tn: <http://bitbit.com/ns/tanaman#>
      		
      		SELECT ?c ?name ?harga ?tempat ?rating ?jumlah ?link ?linkfoto
            WHERE
            {
                ?c    tn:name    ?name ;
                    tn:harga    ?harga ;
                    tn:tempat    ?tempat ;
                    tn:rating    ?rating ;
                    tn:jumlah    ?jumlah ; 
                    tn:link  ?link ; 
              		tn:linkfoto  ?linkfoto . 
                FILTER contains(lcase(str(?name)), lcase(str("${param.name ? param.name : ''}")))
            }`
        };

        try {
            const { data } = await axios(process.env.BASE_URL, {
                method: 'POST',
                headers,
                data: qs.stringify(queryData)
            });
            return data.results;
        } catch (err) {
            console.error("ERROR : " + err);
            return Promise.reject(err);
        }
    }

  // Untuk memformat data yang digunakan
    const formatTanaman = tanaman => {
        return {
            "id": parseInt(tanaman.c.value.substring(tanaman.c.value.length - 3, tanaman.c.value.length)),
            "name": tanaman.name.value,
            "harga": tanaman.harga.value,
            "tempat": tanaman.tempat.value,
            "rating": tanaman.rating.value,
            "jumlah": tanaman.jumlah.value,
            "link": tanaman.link.value,
    		"linkfoto": tanaman.linkfoto.value
        }
    }

router.get('/jasa', async (req, res) => {
    let listJasa = await getJasa(req.query);

    // Format data agar bisa digunakan
    listJasa = listJasa.bindings.map(listJasa => formatJasa(listJasa));

    return res.status(200).json(listJasa);
});

router.get('/jasa/:id', async (req, res) => {
    let listJasa = await getJasa(req.query);

    // Format data agar bisa digunakan
    listJasa = listJasa.bindings.map(listJasa => formatJasa(listJasa));

    return res.status(200).json(listJasa[req.params.id - 1]);
});

    // Untuk mengambil data dari fuseki server
    const getJasa = async (param) => {
        const headers = {
            'Accept': 'application/sparql-results+json,*/*;q=0.9',
            'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
        }

        const queryData = {
            query:
                `PREFIX tn: <http://bitbit.com/ns/jasa#>
      			SELECT ?c ?name ?title ?tempat ?rating ?jumlah ?linkfoto 
                WHERE
                {
                    ?c    tn:name    ?name ;
                        tn:title    ?title ;
                        tn:tempat    ?tempat ;
                        tn:rating    ?rating ;
                        tn:jumlah    ?jumlah; 
              			tn:linkfoto    ?linkfoto.
                    FILTER contains(lcase(str(?title)), lcase(str("${param.title ? param.title : ''}")))
                    FILTER contains(lcase(str(?name)), lcase(str("${param.title ? param.title : ''}")))
                }`
            };

        try {
            const { data } = await axios(process.env.BASE_URL, {
                method: 'POST',
                headers,
                data: qs.stringify(queryData)
            });
            return data.results;
        } catch (err) {
            console.error("ERROR : " + err);
            return Promise.reject(err);
        }
    }

    // Untuk memformat data yang digunakan
    const formatJasa = jasa => {
        return {
            "id": parseInt(jasa.c.value.substring(jasa.c.value.length - 3, jasa.c.value.length)),
            "name": jasa.name.value,
            "title": jasa.title.value,
            "tempat": jasa.tempat.value,
            "rating": jasa.rating.value,
            "jumlah": jasa.jumlah.value,
    		"linkfoto": jasa.linkfoto.value
        }
    }
module.exports = router;