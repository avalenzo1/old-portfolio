<?php
  class ProjectModel
  {
    public function getProjects()
    {
      // This is dummy data
      $data = array(
        array(
          "id" => 1,
          "name" => "Retro Vintage Treasures",
          "description" => "Family Business Project",
          "image" => "https://avalenzo.netlify.app/images/thumbnails/flw-playlist.png",
          "site" => "https://flw-playlist.avalenzo1.repl.co/",
          "repo" => "https://avalenzo1.github.io/FLW-Playlist",
          "created_at" => "2016-01-01 00:00:00",
          "updated_at" => "2022-01-01 00:00:00"
        ),
        array(
          "id" => 1,
          "name" => "Playlist Project",
          "description" => "Add/Remove Songs to your playlist",
          "image" => "https://avalenzo.netlify.app/images/thumbnails/flw-playlist.png",
          "site" => "https://flw-playlist.avalenzo1.repl.co/",
          "repo" => "https://avalenzo1.github.io/FLW-Playlist",
          "created_at" => "2016-01-01 00:00:00",
          "updated_at" => "2022-01-01 00:00:00"
        ),
        array(
          "id" => 2,
          "name" => "What Cartoon Network Character Are You?",
          "description" => "Buzzfeed Character Quiz!",
          "image" => "https://avalenzo.netlify.app/images/thumbnails/flw-buzzfeed.png",
          "site" => "https://flw-01p-buzzfeed-character-quiz-starter-code-light.avalenzo1.repl.co/",
          "repo" => "https://github.com/avalenzo1/flw-buzzfeed-character-quiz",
          "created_at" => "2016-01-01 00:00:00",
          "updated_at" => "2022-01-01 00:00:00"
        ),
        array(
          "id" => 3,
          "name" => "Commission: Javascript Helper",
          "description" => "A website that helps students use HTML canvas",
          "image" => "https://avalenzo.netlify.app/images/thumbnails/javascript-helper.png",
          "site" => "https://avalenzo1.github.io/Javascript-Adapter-Fancification/help.html",
          "repo" => "https://www.github.com/avalenzo1/Javascript-Adapter-Fancification/",
          "created_at" => "2016-01-01 00:00:00",
          "updated_at" => "2022-01-01 00:00:00"
        ),
        array(
          "id" => 4,
          "name" => "Handmaid's Tale Project",
          "description" => "AP Literature Multi-Media Project",
          "image" => "https://avalenzo.netlify.app/images/thumbnails/handmaids-tale.png",
          "site" => "https://avalenzo1.github.io/Handmaids-Tale-AP-Literature",
          "repo" => "https://www.github.com/avalenzo1/Handmaids-Tale-AP-Literature/",
          "created_at" => "2016-01-01 00:00:00",
          "updated_at" => "2022-01-01 00:00:00"
        ),
        array(
          "id" => 5,
          "name" => "Take Turns",
          "description" => "Take turns drawings with friends",
          "image" => "https://avalenzo.netlify.app/images/thumbnails/take-turns.png",
          "site" => "https://take-turns.glitch.me/",
          "repo" => "https://github.com/avalenzo1/take-turns/",
          "created_at" => "2016-01-01 00:00:00",
          "updated_at" => "2022-01-01 00:00:00"
        ),
        array(
          "id" => 6,
          "name" => "Blobius.IO",
          "description" => "agar.io but buggier!",
          "image" => "https://avalenzo.netlify.app/images/thumbnails/blobius-io.png",
          "site" => "https://blobius-io.glitch.me/",
          "repo" => "https://github.com/avalenzo1/blobius-io",
          "created_at" => "2016-01-01 00:00:00",
          "updated_at" => "2022-01-01 00:00:00"
        ),
        array(
          "id" => 7,
          "name" => "Codename Twitify",
          "description" => "Partner project: Twitter + Spotify",
          "image" => "https://avalenzo.netlify.app/images/thumbnails/codename-twitify.png",
          "site" => "https://avalenzo1.github.io/Codename-Twitify/",
          "repo" => "https://www.github.com/avalenzo1/Codename-Twitify/",
          "created_at" => "2016-01-01 00:00:00",
          "updated_at" => "2022-01-01 00:00:00"
        ),
        array(
          "id" => 8,
          "name" => "ARM-ageddon",
          "description" => "T̵̝̭͚̋͜h̶̯̺̒̌̔e̴̘͉̭͂ ̷͍̥̓s̷͎̬͇̓̋̇̑ͅù̸͎̝̯͒̔̈́n̵͈̹̞̰̋͗͂̾ ̸̙͈͒͗͛̈́i̴̺̿ş̴͍̦̓̏͜͠ ̵̝̔́ğ̶͔̗̺͘͜o̷̳̜̓͜ń̶̤̉͑͝ē̵̦͇̱̫͋͝.̶͖̯͙͊̂͑",
          "image" => "/assets/images/thumbnails/ARMageddon.png",
          "site" => "https://avalenzo1.github.io/ARMageddon/",
          "repo" => "https://www.github.com/avalenzo1/ARMageddon/",
          "created_at" => "2016-01-01 00:00:00",
          "updated_at" => "2022-01-01 00:00:00"
        ),
      );
      
      return $data;
    }
  }
?>