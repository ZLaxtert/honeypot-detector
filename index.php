<html>
  <head>
    <title>HONEYPOT DETECTOR</title>
    <meta name="title" content="HONEYPOT DETECTOR">
    <meta name="description" content="How does it work? Honeypot detector simulates a buy and a sell transaction to determine if a token is a honeypot (Scam).">
    <meta name="keywords" content="honeypot, honeypot detector, honeypot checker, zlaxtert, blacknetid, banditcoding, Zlaxtert, BLACKNETID, BANDITCODING">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="zlaxtert">
    <meta itemprop="name" content="HONEYPOT DETECTOR">
    <meta itemprop="description" content="How does it work? Honeypot detector simulates a buy and a sell transaction to determine if a token is a honeypot (Scam).">
    <meta itemprop="image" content="https://banditcoding.xyz/img/logo.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="HONEYPOT DETECTOR">
    <meta name="twitter:description" content="How does it work? Honeypot detector simulates a buy and a sell transaction to determine if a token is a honeypot (Scam).">
    <meta name="twitter:site" content="zlaxtert">
    <meta name="twitter:creator" content="zlaxtert">
    <meta name="twitter:image:src" content="../img/logo.png">
    <meta property="og:title" content="HONEYPOT DETECTOR">
    <meta property="og:description" content="How does it work? Honeypot detector simulates a buy and a sell transaction to determine if a token is a honeypot (Scam).">
    <meta property="og:image" content="../img/logo.png">
    <meta property="og:url" content="https://banditcoding.xyz/">
    <meta property="og:site_name" content="BANDITCODING">
    <link rel="icon" type="image/png" href="http://banditcoding.xyz/img/logo.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="s003">
      <form method="post" action="api/api.php">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="input-select">
              <select id="chain" data-trigger="" name="chain">
                <option value="">OPTIONS</option>
                <option value="bsc">BSC</option>
                <option value="eth">ETH</option>
              </select>
            </div>
          </div>
          <div class="input-field second-wrap">
            <input type="text" name="token" placeholder="Contract Address" required/>
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" name="submit">
              <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
              </svg>
            </button>
          </div>
        </div>
      </form>
      </div>
    </div>
    </div>
    <center>
          <p>Code by <code><a href="https://instagram.com/zlaxtert">Zlaxtert</a></code></p>
      </center>
    <script src="js/extention/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });
      document.getElementById("chain").required = true;

    </script>
  </body>
</html>
