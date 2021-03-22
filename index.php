<?php include 'send.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Contact Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1 id="title">WARBET PERIYAAN</h1>
  <p id="desciption">Silahkan Isi Formulirnya, Terima Kasih</p>

  <!--alert messages start-->
  <!--alert messages end-->
  <form class="contact" action="" method="post">
    <label for="name" id="name-label">
      Name
      <input type="text" id="name" name="name" placeholder="Enter your name" />
    </label>

    <label for="email" id="email-label">
      Email
      <input type="email" id="email" name="email" placeholder="Enter your email" />
    </label>

    <label for="number" id="number-label">
      Umur
      <input type="number" name="number" id="number" placeholder="How old are you" min="15" max="40" />
    </label>

    <label for="dropdown" id="dropdown-label">
      Minuman yang gurih?
      <select name="dropdown" id="dropdown">
        <option>Angur merah</option>
        <option>Intisari</option>
        <option>Vodka</option>
        <option>Jack Deniels</option>
      </select>
    </label>

    <label for="member" id="member-label">
      Apa yang lu suka? <br /><br />
      <input type="radio" name="hobi" value="Ngoco" />Ngoco <br />
      <input type="radio" name="hobi" value="DJ" />Nge DJ <br />
      <input type="radio" name="hobi" value="DiNgocoin" />DiNgocoin <br />
      <input type="radio" name="hobi" value="Djin" />Di Djin <br />
    </label>

    <!-- <label for="hobi" id="hobi-label">Apa hobi lu ? <br /><br />
      <input type="checkbox" name="hobi" value="Ngoco" />Ngoco <br />
      <input type="checkbox" name="hobi" value="DJ" />Nge DJ <br />
      <input type="checkbox" name="hobi" value="DiNgocoin" />DiNgocoin <br />
      <input type="checkbox" name="hobi" value="Djin" />Di Djin <br />
    </label> -->

    <label for="massage" id="massage-label">
      Kata-kata buat yang bikin?
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
    </label>
    <button type="submit" name="submit">Send</button>
  </form>
  <script type="text/javascript">
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
  <div class="maps">
    <p>Nih Lokasi Gua Kalo Mo Betumbuk</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4773344991127!2d106.72684885008124!3d-6.332149995395006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef88b231edfd%3A0xf19daa3ee0feecbc!2swarbaca%2005%20family!5e0!3m2!1sen!2sid!4v1616341589402!5m2!1sen!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
  </div>
</body>
</html>

<script src="dist/sweetalert2.all.min.js"></script>
  <?php echo $awa; ?>