# BitBit
Projek ini dibangun menggunakan Codeigniter, NodeJS, dan SPARQL
## Cara menggunakan aplikasi
### Persiapan 
Aplikasi Bitbit saat ini hanya bisa diakses secara local dengan cara sebagai berikut :
  1. Menjalankan Fuseki Server
      - Jalankan fuseki server dengan command dibawah pada folder fuseki server di cmd/terminal.
        Pada sistem operasi Windows : `fuseki-server`.
      - Akses server management di `http://localhost:3030`
      - Tambahkan dataset dengan nama `bitbit`
      - Upload data `bitbit_data.ttl` yang terdapat di folder bitbit-backend/data dalam repository BitBit, setelah menjalanlan.
        git clone `https://github.com/rifaazalfaaf/BitBit.git`.
  2. Menyiapkan Backend
     - Buka folder `bitbit-backend` pada repository BitBit yang telah di-clone tadi
     - Jalankan cmd/terminal lain atau tab baru pada terminal, tanpa menutup cmd/terminal yang menjalankan fuseki server
     - Install node modules dengan `npm install`
     - Jalankan REST API Server dengan `npm start`
  3. Menyiapkan Frontend
     - Siapkan XAMPP dan Browser
     - Buka  XAMPP dan jalankan Apache dan SQL
     - Buka Browser lalu akses bagian frontend pada link berikut `http://localhost/Bitbit/bitbit-frontend/ `
## Anggota Kelompok
  1. Rifaa' Zalfaa'  (140810170031)
  2. Karimah Azzuhdu (140810170027)
  3. Agnes Hata      (140810170011)
