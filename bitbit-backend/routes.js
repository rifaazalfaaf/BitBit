const express = require('express');
const axios = require('axios');
const qs = require('qs');
const router = express.Router();

router.get('/tanaman', async (req, res) => {
    let listTanaman = await getTanaman(req.query);
  
    // Format data agar bisa digunakan
    listTanaman = listTanaman.bindings.map(listTanaman => formatTanaman(listTanaman));
  
    if (req.params.id) {
      return res.status(200).json(listTanaman[req.params.id - 1]);
    } else {
      return res.status(200).json(listTanaman);
    }
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
        SELECT ?c ?name ?harga ?tempat ?rating ?jumlah ?link
        WHERE
        {
          ?c    tn:name    ?name ;
                tn:harga    ?harga ;
                tn:tempat    ?tempat ;
                tn:rating    ?rating ;
                tn:jumlah    ?jumlah ; 
                tn:link  ?link . 
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
      "link": tanaman.link.value
    }
  }

module.exports = router;