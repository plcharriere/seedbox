<?php

$services = [
  [
    "name" => "qBittorrent",
    "icon" => "svg",
    "desc" => "Torrent manager",
  ],
  [
    "name" => "Jellyfin",
    "icon" => "svg",
    "desc" => "Streaming platform",
  ],
  [
    "name" => "ownCloud",
    "icon" => "svg",
    "desc" => "Cloud service",
  ],
  [
    "name" => "XBrowserSync",
    "icon" => "svg",
    "desc" => "Browser sync service",
  ],
  [
    "name" => "Bitwarden",
    "icon" => "png",
    "desc" => "Password manager",
  ],
  [
    "name" => "netdata",
    "icon" => "png",
    "desc" => "System monitoring",
  ]
]

?>
<html>
  <head>
    <title>Seedbox</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body class="container p-4">
    <table class="w-100 h-100 mx-auto">
      <tbody>
        <tr>
          <td class="align-middle">
            <center>
              <img src="assets/img/box.png" class="box"><img src="assets/img/logo.png" class="logo mb-5">
            </center>
            <div class="row m-0">
<?php foreach ($services as $service) { ?>
              <a class="col p-0" href="/<?= strtolower($service["name"]) ?>">
                <div class="card">
                  <img class="service-logo mx-auto mb-2" src="/assets/img/<?= strtolower($service["name"]) ?>.<?= $service["icon"] ?>">
                  <h4><?= $service["name"] ?></h4>
                  <span class="font-weight-light py-2 mb-2"><?= $service["desc"] ?></span>
                  <code>/<?= strtolower($service["name"]) ?></code>
                </div>
              </a>
<?php } ?>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>