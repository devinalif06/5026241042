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
        font-size: small;
        margin: 20%;
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
          src="https://www.fcbarcelona.com/photo-resources/2025/09/09/a9ecee2c-116c-405c-8524-3127913e7a3c/10-Lamine.jpg?width=640&height=400"
        />
        <p>Lamine Yamal</p>
      </div>

      <div class="photo">
        <img
          src="https://www.fcbarcelona.com/photo-resources/2025/09/10/6dd5aa47-d5fb-45a5-b171-0da82c9c7105/09-Lewandowski.jpg?width=640&height=400"
        />
        <p>Robert Lewandowski</p>
      </div>

      <div class="photo">
        <img
          src="https://www.fcbarcelona.com/photo-resources/2025/09/10/08bbb1ff-004b-4623-a675-66fd1fbfdc8b/11-Raphinha.jpg?width=640&height=400"
        />
        <p>Raphinha</p>
      </div>

      <div class="photo">
        <img
          src="https://www.fcbarcelona.com/photo-resources/2025/09/10/85f7a271-6b29-4459-be8b-128cb25596d0/14-Rashford.jpg?width=1680&height=1050"
        />
        <p>Marcus Rashford</p>
      </div>
    </div>

    <div class="pagination-container">
      <nav>
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="{{ url('/page2') }}">Previous</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="{{ url('tugasweek3') }}">1</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="{{ url('/page2') }}">2</a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">3</a>
          </li>

          <li class="page-item disabled">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </body>
</html>
