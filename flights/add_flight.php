<!DOCTYPE html>
<html>
  <head>
    <title>Research Application Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      h5 {
      margin: 10px 0;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #095484; 
      }
      .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/01/c43630149befa5c9559813f72e99bcb6bf149e62.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.5); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder, a {
      color: #095484;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #095484;
      color: #095484;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio, label.check {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      .checkbox-item label {
      margin: 5px 20px 10px 0;
      }
      label.radio:before, label.check:before {
      content: "";
      position: absolute;
      left: 0;
      }
      label.radio:before {
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #095484;
      }
      label.check:before {
      top: 2px;
      width: 16px;
      height: 16px;
      border-radius: 2px;
      border: 1px solid #095484;
      }
      input[type=checkbox]:checked + .check:before {
      background: #095484;
      }
      label.radio:after {
      left: 5px;
      border: 3px solid #095484;
      }
      label.check:after {
      left: 4px;
      border: 3px solid #fff;
      }
      label.radio:after, label.check:after {
      content: "";
      position: absolute;
      top: 6px;
      width: 8px;
      height: 4px;
      background: transparent;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after, input[type=checkbox]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #0666a3;
      }
      @media (min-width: 568px) {
      .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
    <form action="/">

      <div class="banner">
        <h1>დაამატე ახალი ფრენა </h1>
      </div>

      <div class="item">
        <p>გამგზავრების ქალაქი</p>
        <input type="text" name="name"/>
      </div>

      <div class="item">
        <p>ჩაფრენის ქალაქი</p>
        <input type="text" name="name"/>
      </div>

      <div class="item">
        <p>გამგზავრების ქალაქის ინდექსი (მაგ. TBS)</p>
        <input type="text" name="name"/>
      </div>

      <div class="item">
        <p>ჩაფრენის ქალაქის ინდექსი (მაგ. AMS)</p>
        <input type="text" name="name"/>
      </div>

      <div class="item">
        <p>გამგზავრების დღე</p>
        <input type="date" name="bdate" required/>
        <i class="fas fa-calendar-alt"></i>
      </div>

      <div class="item">
        <p>ჩაფრენის დღე</p>
        <input type="date" name="bdate" required/>
        <i class="fas fa-calendar-alt"></i>
      </div>

      <div class="item">
        <p>გამგზავრების საათი</p>
        <input type="time" name="name"/>
      </div>

      <div class="item">
        <p>ჩაფრენის საათი</p>
        <input type="time" name="name"/>
      </div>

      <div class="item">
        <p>ბილეთის ფასი</p>
        <input type="text" name="name"/>
      </div>

      <div class="item">
        <p>ბილეთის ფასი კაი ცუნცულა დეიდებისთვის</p>
        <p>(გამოტოვება შეიძლება)</p>
        <input type="text" name="name"/>
      </div>

      <div class="item">
        <p>ავია კომპანია</p>
        <input type="text" name="name"/>
      </div>


      <h4>გადაჯდომა</h4>

      <div class="item">
        <p>გადაჯდომის ქალაქი</p>
        <input type="text" name="name"/>
      </div>

      <div class="item">
        <p>გადაჯდომის ქალაქის ინდექსი (მაგ. BCN)</p>
        <input type="text" name="name"/>
      </div>

      <div class="item">
        <p>გადაჯდომის დღე</p>
        <input type="date" name="bdate" required/>
        <i class="fas fa-calendar-alt"></i>
      </div>

      <div class="item">
        <p>ჩაფრენის საათი</p>
        <input type="time" name="name"/>
      </div>


      <h4>გადაჯდომის შემდეგი ფრენა</h4>

      <div class="item">
        <p>ჩაფრენის დღე</p>
        <input type="date" name="bdate" required/>
        <i class="fas fa-calendar-alt"></i>
      </div>

      <div class="item">
        <p>გამგზავრების საათი</p>
        <input type="time" name="name"/>
      </div>

      <div class="item">
        <p>ჩაფრენის საათი</p>
        <input type="time" name="name"/>
      </div>


      <div class="item">
        <p>დამატებითი შენიშვნები<span class="required">*</span></p>
        <textarea rows="3" required></textarea>
      </div>

      <br />

      <div class="btn-block">
        <button type="submit" href="/">დაამატე ფრენა</button>
      </div>

    </form>
    </div>
  </body>
</html>