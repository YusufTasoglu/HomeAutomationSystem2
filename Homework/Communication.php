<div>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="HomePage_c.php">Smart Home</a>
            </div>
            <ul>
                <li><a href="Communication.php">Communication</a></li>
            </ul>

        </div>
        
        <div class="about-section">
            <h1>Communication</h1>
            <p></p>
          </div>
          
          <h2 style="text-align:center">Our Team</h2>
          <div class="row">
            <div class="column">
              <div class="card">
                
                <div class="container">
                  <h2>ÖZCAN DOĞAN</h2>
                  <p class="title"></p>
                  <p></p>
                  <p>0123 456 78 90</p>
                  <p><button class="button">Contact</button></p>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
        
              </div>
            </div>
          
            <div class="column">
              <div class="card">
            
                <div class="container">
                  <h2>YUSUF TAŞOĞLU</h2>
                  <p class="title">0123 456 78 90</p>
                  <p></p>
                  <p></p>
                  <p><button class="button">Contact</button></p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <style>
    
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
  
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

        .navbar .logo {
            float: left;
            margin-left: 40px;
            margin-top: 20px;
        }

        .navbar {

            width: 100%;
            height: 80px;
            background-color: 080710;

        }

        .navbar a {
            float: right;
            color: white;
            margin: 15px;

        }

        .navbar .logo {
            text-decoration: none;
            font-size: 30px;
            margin-bottom: 30px;
        }

        .navbar ul li {
            list-style: none;
            display: inline;
            font-size: 20px;
            margin: 10px;

        }
    </style>
