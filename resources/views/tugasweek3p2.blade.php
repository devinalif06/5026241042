<!doctype html>
<html lang="en">
  <head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 20px;
      }

      h1 {
        text-align: center;
      }

      p {
        text-align: center;
        margin: 20%;
        font-size: small;
      }

      .album {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        max-width: 900px;
        margin: auto;
      }

      .photo {
        background: #f8f9fa;
        padding: 10px;
        border-radius: 8px;
        text-align: center;
      }

      .photo img {
        width: 100%;
        height: auto;
        border-radius: 6px;
      }

      .photo p {
        margin-top: 8px;
        font-weight: bold;
      }

      .pagination-container {
        margin-top: 30px;
        display: flex;
        justify-content: center;
      }
    </style>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <h1>Tugas Pagination</h1>
    <p>
      Tugas Pemorgraman Web Week-2 membuat fitur pagination dari bootstrap,
      disini saya membuat website album foto pemain barcelona dengan pagination,
      jadi terdapat 3 halaman dan setiap halamannya berisi foto pemain FC
      Barcelona, pagination dibuat interaktif dengan ketika tombol halaman
      berapapun dipencet maka halamannya otomatis akan berubah, dan ketika
      tombol "Previous" diklik maka halaman dengan nomor urut sebelumnya akan
      muncul, begitu juga dengan tombol "Next" diklik maka halaman dengan nomor
      urut setelahnya yang akan muncul.
    </p>
    <div class="album">
      <div class="photo">
        <img
          src="https://www.fcbarcelona.com/photo-resources/2025/09/10/597a1e13-c0b2-4c93-a2fd-4cc39a9459cc/08-Pedri.jpg?width=640&height=400"
        />
        <p>Pedri</p>
      </div>

      <div class="photo">
        <img
          src="https://www.fcbarcelona.com/photo-resources/2025/09/09/4e851606-cfd6-4dc4-9042-c3dee40dbeb7/16-Fermin.jpg?width=640&height=400"
        />
        <p>Fermín López</p>
      </div>

      <div class="photo">
        <img
          src="https://www.fcbarcelona.com/photo-resources/2025/09/09/793001b1-f225-4259-8a74-27e418a3e4c9/21-De_Jong.jpg?width=640&height=400"
        />
        <p>Frenkie de Jong</p>
      </div>

      <div class="photo">
        <img
          src="https://www.fcbarcelona.com/photo-resources/2025/09/09/79af1dbc-34f3-4bb7-9ee4-08269866ab47/20-Olmo.jpg?width=1680&height=1050"
        />
        <p>Dani Olmo</p>
      </div>
    </div>

    <div class="pagination-container">
      <nav>
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="{{ url('tugasweek3') }}">Previous</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="{{ url('tugasweek3') }}">1</a>
          </li>

          <li class="page-item active">
            <a class="page-link">2</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="{{ url('/page3') }}">3</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="{{ url('/page3') }}">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </body>
</html>
