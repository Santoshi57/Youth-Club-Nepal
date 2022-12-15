<!DOCTYPE html>
<html>
  <head>
    <title>Blood Donation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
<style>
body{
  font-family: 'Yanone Kaffeesatz', sans-serif;
  background-image: url('images/donor.webp');
  color
  

}
h1,h3{
  color:#0000FF;
  text-align: center;
}
input[type=text],input[type=number],input[type=email],input[type=date],input[type=address]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}
input[type=radio]{
  margin-bottom: 10px;
}
input[type=submit]{
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: 3px ;
  border-radius: 30px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  margin: auto;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.container{
  background-color:#F0F8FF;
  border-radius: 50px;
  padding: 40px;
  max-width: 500px;
  margin: auto;
  font-size: 20px;
}
.question{
  margin-bottom: 16px;
}
#thank_you{
  font-size: 36px;
}
#next_line{
  font-size: 28px;
}

</style>


  </head>
  <body>
    <h1>Online Donation Form</h1>
    <br>
  
        <div class="container">
          <form action=" " method="post">
            <div class="question">
              <label for="name">Donor's  Name: </label><br>

              <label for="name">First  Name  *</label>
              <input type="text" id="name" name="name" placeholder="Your Name" required><br>
              <label for="name">Last  Name  *</label>
              <input type="text" id="name" name="name" placeholder="Your Name" required>
              </div>

            <div class="question">
              <label for="email">Email *</label>
              <input type="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="question">
              <label for="Address">Address *</label>
              <input type="address" name="address" placeholder="Your Address" required>
            </div>
            <div class="question">
              <label for="contact_number">Contact number *</label>
              <input type="number" name="contact_number" placeholder="Your number" required>
            </div>
            <div class="question">
              <label for="donation" class="radio">Types of Donation *<br>
              <input type="radio" name="donationr" value="cash" required>Cash<br>
              <input type="radio" name="donation" value="product">Product/items<br>
              <input type="radio" name="donation" value="service">Services<br>
              <input type="radio" name="donation" value="other">Others<br></label>
            </div>
            <div class="question">
              <label for="date">Donation Date *</label>
              <input type="date" name="dater" required>
            </div>
            <div class="question">
              <label for="comment">Comments </label>
              <input type="text" name="comment" placeholder="Your comments" required>
            </div>
           
            <div class="question">
              <label for="amount">Donation Amount *<br>
              <input type="radio" name="amount" value="$5" required> less than $5<br>
              <input type="radio" name="amount" value="$10">$10<br>
              <input type="radio" name="amount" value="$25"> $25<br>
              <input type="radio" name="amount" value="$50">Above $50<br></label>
            </div>
            <div class="question">
              <label for="payment_method">Payment Method*<br>
                <input type="radio" name="payment_method" value=" " required>Debit or Credit Card<br>
                <input type="radio" name="payment_method" value=" ">Cash <br>
                <input type="radio" name="payment_method" value=" ">Others <br>
              </label>
            </div>
            
            <div class="question">
              <label for="agree">
                <input type="checkbox" name="agree" value="Agree" required>
                I agree that, all the information I have provided are true
                and they won't be misused.
              </label>
            </div>
            <input type="submit" name="submit" >
            <ul>
          <li ><a href="donate.html" >Go Back</a></li>
        </ul>

          </form>
        </div>
  </body>
</html>





