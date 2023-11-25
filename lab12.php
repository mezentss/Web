<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Прокат экологически чистой модной одежды</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .image-description {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .image-description img {
      max-width: 100%;
      height: auto;
    }

    ul {
      display: flex;
      flex-direction: column;
      align-items: right;
      text-align: right;
      list-style: none;
    }

    li {
      margin-bottom: 10px;
  }

    #name {
      width: 300px; 
    }

    #email {
      width: 200px; 
    }

    #message {
      width: 400px; 
    }

    .btn {
      width: 100px; 
    }

    .success-message {
      display: none;
      color: green;
      font-weight: bold;
    }

  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col">
      <h1>Прокат экологически чистой модной одежды</h1>
      <p>Прокат экологически чистой модной одежды для стильных и ответственных людей. 
        Мы предлагаем широкий выбор моделей от ведущих устойчивых брендов, чтобы вы могли выглядеть потрясающе, 
        не нанося вред окружающей среде</p>
      <div class="image-description">
        <img src="1.jpg" >
        <p>Описание к первому изображению</p>
      </div>
      <div class="image-description">
        <img src="2.jpg" >
        <p>Описание ко второму изображению</p>
      </div>
      <div class="image-description">
        <img src="3.jpg" >
        <p>Описание к третьему изображению</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
    <ul>
      <h2>Преимущества нашего бренда:</h2>
        <li>Экологически чистая одежда высокого качества</li>
        <li>Широкий выбор моделей и размеров</li>
        <li>Быстрая доставка и удобный прокат</li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col">
    <div class="container mt-3">
  <form id="contactForm">
    <h2>Свяжитесь с нами</h2>
    <div class="mb-3">
      <label for="name" class="form-label">Имя</label>
      <input type="text" class="form-control" id="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Сообщение</label>
      <textarea class="form-control" id="message" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
    <div class="success-message" id="successMessage">Ваше сообщение успешно отправлено</div>
  </form>
</div>
      <p>Контактная информация: </p>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $('#contactForm').submit(function (event) {
      event.preventDefault(); 
      $('.success-message').fadeIn('slow', function () {
        setTimeout(function () {
          $('.success-message').fadeOut('slow');
        }, 3000);
      });
      $('#contactForm')[0].reset();
    });
  });
</script>
</body>
</html>
