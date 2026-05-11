<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Creative Designs by Pooja</title>
    <link rel="icon" type="image/png" href="pooja-logo.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-KZDECMSSFW"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-KZDECMSSFW");
    </script>
  </head>

  <body>
    <div class="loading-bar"></div>
    <div class="container">
      <div class="left">
        <img src="assets/img/coming-soon-logo.png" class="logo" />
        <div class="badge">🚀 Website Coming Soon</div>
        <h1>Crafting Designs That <span>Inspire</span></h1>
        <p>
          We are working on something creative and beautiful. Stay tuned for an
          amazing experience.
        </p>
        <div class="features">
          <div class="feature">🎨 UI/UX Design</div>
          <div class="feature">🖌 Graphic Design</div>
          <div class="feature">🚀 Brand Identity</div>
        </div>
        <a href="https://www.instagram.com/creative.designp/" class="btn">Get in Touch</a>
      </div>
      <div class="right">
        <div class="card">
          <img src="assets/img/coming-soon-logo.png" width="110" />
        </div>
      </div>
    </div>
    <div class="footer">
        <p>© Creative Design's By Pooja | Developed by<a href="https://www.instagram.com/bhavyeshnial/" target="_blank">Bhavyesh Nial</a></p>
    </div>
  </body>
</html>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {
    background: #ffffff;
    color: #1e3a8a;
    padding: 20px;
    min-height: 100dvh;
}


/* LOADING BAR */
.loading-bar {
    position: fixed;
    top: 0;
    left: 0;
    height: 3px;
    width: 0%;
    background: linear-gradient(90deg, #f97316, #ffb347);
    animation: load 3s ease forwards;
}

@keyframes load {
    to { width: 100%; }
}

/* CONTAINER */
.container {
    display: flex;
    flex-direction: column;
    gap: 30px;
    min-height: 100dvh;
}

/* LEFT */
.logo {
    width: 90px;
    margin-bottom: 10px;
    animation: fadeUp 1s ease;
    text-align:center;
}

.badge {
    display: inline-block;
    background: rgba(255,255,255,0.6);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(249,115,22,0.2);
    color: #f97316;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 11px;
    margin-bottom: 15px;
    animation: fadeUp 1.2s ease;
}

h1 {
    font-size: 28px;
    line-height: 1.3;
    animation: fadeUp 1.4s ease;
}

h1 span {
    background: linear-gradient(90deg, #f97316, #ffb347);
    -webkit-background-clip: text;
     background-clip: text;
    -webkit-text-fill-color: transparent;
}

p {
    margin-top: 10px;
    font-size: 14px;
    color: #555;
    animation: fadeUp 1.6s ease;
}

/* FEATURES */
.features {
    display: grid;
    grid-template-columns: 1fr;
    gap: 10px;
    margin: 20px 0;
}

.feature {
    padding: 12px;
    border-radius: 10px;
    background: #f9fafb;
    font-size: 13px;
    text-align: center;
    transition: 0.3s;
}

.feature:hover {
    background: #fff3e6;
    transform: translateY(-3px);
}

/* BUTTON */
.btn {
    display: inline-block;
    padding: 12px 22px;
    background: linear-gradient(90deg, #f97316, #ffb347);
    color: #fff;
    text-decoration: none;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
    box-shadow: 0 8px 20px rgba(249,115,22,0.3);
    transition: 0.3s;
    animation: pulse 2s infinite;
}

.btn:hover {
    transform: translateY(-2px) scale(1.03);
}

@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(249,115,22,0.4); }
    70% { box-shadow: 0 0 0 15px rgba(249,115,22,0); }
    100% { box-shadow: 0 0 0 0 rgba(249,115,22,0); }
}

/* RIGHT */
.right {
    position: relative;
}

.right::after {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(249,115,22,0.15), transparent);
    filter: blur(60px);
    z-index: -1;
}
.card {
    width: 100%;
    max-width: 260px;
    height: 260px;
    margin: auto;
    border-radius: 20px;
    background: #fff;

    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: visible;
    animation: fadeUp 1.8s ease, float 4s ease-in-out infinite;
}

/* MAIN RING */
.card::before {
    content: "";
    position: absolute;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 2px solid #f97316;
    opacity: 0.4;
    animation: spread 3s ease-out infinite;
}

/* SECOND RING (delay for premium effect) */
.card::after {
    content: "";
    position: absolute;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 2px solid #ffb347;
    opacity: 0.3;
    animation: spread 3s ease-out infinite 1.5s;
}

/* SPREAD ANIMATION */
@keyframes spread {
    0% {
        transform: scale(1);
        opacity: 0.5;
    }
    70% {
        transform: scale(1.4);
        opacity: 0;
    }
    100% {
        transform: scale(1.4);
        opacity: 0;
    }
}
/* CARD */
.card {
    width: 100%;
    max-width: 260px;
    height: 260px;
    margin: auto;
    border-radius: 20px;
    background: #fff;

    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    animation: fadeUp 1.8s ease, float 4s ease-in-out infinite;
}

.card::before {
    content: "";
    position: absolute;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 2px solid #f97316;
    opacity: 0.2;
}

/* FLOAT */
@keyframes float {
    0% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0); }
}

/* FOOTER */
.footer {
    text-align: center;
    margin-top: 30px;
    font-size: 12px;
    color: #777;
}

/* ANIMATION */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}



/* DESKTOP */
@media(min-width: 768px) {
    body {
        height: 100dvh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        max-width: 1100px;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .features {
        grid-template-columns: repeat(3, 1fr);
    }

    h1 {
        font-size: 44px;
    }

    .card {
        width: 320px;
        height: 320px;
    }

    .card::before {
        width: 250px;
        height: 250px;
    }

    .footer {
        position: absolute;
        bottom: 20px;
        width: 100%;
    }
}
.footer a {
    background: linear-gradient(90deg, #f97316, #ffb347);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    text-decoration: none;
    font-weight: 500;
}
</style>