<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Прокат экологически чистой одежды</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  
    body {
      background-color: #d3b691; 
      color: #7b615b; 
      text-align: center;
    
    }

    h1, h2 {
      color: #4e3e3a; 
    }

    .container {
      max-width: 900px;
    }

    .image-description {
      display: flex;
      flex-direction: row;
      align-items: center;
      text-align: left;
      background-color: #f5eadc; 
      border-radius: 10px;
      padding: 20px; 
      margin-bottom: 20px; 
    }

    .image-description img {
      max-width: 100%; 
      height: auto;
      margin-right: 20px; 
      border-radius: 10px;
    }

    .col {
      display: flex;
      flex-wrap: wrap;
      gap: 20px; 
    }

    ul {
      list-style: none;
      color: #7b615b; 
    }

    li {
      margin-bottom: 10px;
    }

    form {
      background-color: #f5eadc; 
      padding: 20px; 
      margin-top: 20px; 
      border-radius: 10px;
    }

    #contactForm input, #contactForm textarea, #contactForm button {
      margin-bottom: 10px; 
    }
    .col {
      display: flex;
      flex-direction: row; 
      gap: 20px;
      justify-content: space-between; 
      align-items: flex-start; 
    }

    form, ul {
      flex: 1; 
    }

    .btn-primary {
      background-color: #6c757d; 
      border-color: #6c757d;
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
    </div>
  </div>

  <div class="image-description mb-3 pb-4">
  <div class="row">
    <div class="col-12 col-md-4">
      <div class="image-description d-flex flex-column justify-content-center text-center">
        <img src="1.jpg" class="img-fluid">
        <p>Наш стартап стремится произвести революцию в индустрии моды, предложив экологически чистую альтернативу традиционному потреблению одежды.</p>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="image-description d-flex flex-column justify-content-center text-center">
        <img src="2.jpg" class="img-fluid">
        <p>В компании мы уделяем приоритетное внимание экологическим практикам во всей нашей деятельности.</p>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="image-description d-flex flex-column justify-content-center text-center">
        <img src="3.jpg" class="img-fluid">
        <p>Наша платформа предлагает удобный и удобный интерфейс, позволяющий клиентам просматривать широкий выбор предметов одежды.</p>
      </div>
    </div>
  </div>
</div>

  
  <div class="row">
    <div class="col">
      <ul>
        <br>
        <h2>Преимущества нашего бренда:</h2>
        <li>Экологически чистая одежда высокого качества</li>
        <li>Широкий выбор моделей и размеров</li>
        <li>Быстрая доставка и удобный прокат</li>
      </ul>
    </div>
    <div class="col">
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
        <div class="success-message" id="successMessage" style="display: none;">Ваше сообщение успешно отправлено</div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <p>Контактная информация: @nomailhere.ru, +123456789</p>
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
