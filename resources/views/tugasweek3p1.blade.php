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
          src="https://www.fcbarcelona.com/photo-resources/2025/09/09/2b12f57a-582e-408a-b23e-ec9c42b0d5b9/01-Joan_Garcia.jpg?width=640&height=400"
        />
        <p>Joan Garcia</p>
      </div>

      <div class="photo">
        <img
          src="https://www.fcbarcelona.com/photo-resources/2026/01/15/79a75f80-8fb9-4213-b87f-f6fa2c4f4ec4/00-Cancelo.jpg?width=640&height=400"
        />
        <p>João Cancelo</p>
      </div>

      <div class="photo">
        <img
          src="https://www.fcbarcelona.com/photo-resources/2025/09/09/e25e8ccc-4b69-48ef-8c48-2eebbcc74770/23-Kounde.jpg?width=640&height=400"
        />
        <p>Jules Kounde</p>
      </div>

      <div class="photo">
        <img
          src="https://www.fcbarcelona.com/photo-resources/2025/09/09/2ca1e448-3d31-4ff2-9909-44fd00368472/02-Cubarsi.jpg?width=640&height=400"
        />
        <p>Pau Cubarsí</p>
      </div>

      <div class="photo">
        <img
          src="https://www.fcbarcelona.com/photo-resources/2025/09/09/46af26e5-df57-406a-9bb1-b6f037631f0f/04-Araujo.jpg?width=640&height=400"
        />
        <p>Ronald Araujo</p>
      </div>
    </div>

    <div class="pagination-container">
      <nav>
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">1</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="{{ url('/page2') }}">2</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="{{ url('/page3') }}">3</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="{{ url('/page2') }}">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </body>
</html>
