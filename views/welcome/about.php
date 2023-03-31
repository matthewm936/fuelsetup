<!DOCTYPE php>
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

  header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
  }
  
  h1 {
    font-size: 36px;
    margin-bottom: 20px;
  }
  
  p {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 30px;
  }
  
  a {
    color: #333;
    text-decoration: none;
  }
  
  a:hover {
    color: #fff;
    background-color: #333;
  }
  
  .container {
    max-width: 960px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .col {
    float: left;
    width: 25%;
    padding: 0 10px;
  }
  
  @media screen and (max-width: 600px) {
    .col {
      width: 100%;
    }
  }

  img {
  max-width: 200px;
  max-height: 200px;
}

</style>
  </head>
  <body>
    <header>
      <h1>About Us</h1>
    </header>

<div class="container">
  <div class="row">
    <div class="col">
    <img src="assets/img/benAvatar.png" alt="Ben  avatar" class="avatar">
      <h2>Ben Palmer</h2>
      <p>Ben Palmer is a talented developer with a passion for computer science. He is currently pursuing a degree in computer science at CSU University. Ben's programming skills have already been put to use in various projects. In his free time, Ben enjoys coding projects that solve problems he has encountered in his daily life.</p>
    </div>
    
    <div class="col">
    <img src="assets/img/mattAvatar.png" alt="matt avatar" class="avatar">

      <h2>Matthew Maloney</h2>
      <p>Matthew Maloney is a skilled developer who is currently studying computer science at CSU University. Matthew is a natural problem solver and is always looking for ways to optimize his code and make his projects more efficient. He is also a team player and enjoys collaborating with others on programming projects.</p>
    </div>
    
    <div class="col">
    <img src="assets/img/joshAvatar.png" alt="josh avatar" class="avatar">

      <h2>Joshua Hatch</h2>
      <p>Joshua Hatch is a bright and motivated developer currently pursuing a degree in computer science at CSU University. Joshua has already made significant contributions to the field of computer science through his research and projects. He is known for his analytical thinking skills and his ability to approach complex problems with a clear and logical mindset.</p>
    </div>
    
    <div class="col">
    <img src="assets/img/shamAvatar.png" alt="sham avatar" class="avatar">

      <h2>Sham Sohdi</h2>
      <p>Sham Sohdi is a talented developer and computer science student at CSU University. Sham is a problem solver at heart and enjoys tackling challenging programming projects. He is also a creative and innovative thinker who is always exploring new technologies and programming languages.</p>
    </div>
  </div>
</div>
  </body>
</p1>
