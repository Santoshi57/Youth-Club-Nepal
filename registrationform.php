<!DOCTYPE html>
<html>
  <head>
    <title>Blood Donation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
<style>
body{
  font-family: 'Yanone Kaffeesatz', sans-serif;
  background-image: url('images/1.webp');
  

}
h1,h3{
  color:black;
  text-align: center;
}
input[type=text],input[type=number],input[type=email]{
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
  background-color: papayawhip;
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
    <section>
      <nav>
        <ul>
          <li ><a href="program.html" style="color: aliceblue;">Go Back</a></li>
        </ul>
      </nav>
    </section>
    <h1>Blood Donation Form</h1>
    <h3>Donate Blood - Save Life!<br>
        "Donating blood is a very precious work for a human being."</h3>
        <div class="container">
          <form action=" " method="post">
            <div class="question">
              <label for="name">Your Name *</label>
              <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="question">
              <label for="email">Your Email *</label>
              <input type="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="question">
              <label for="gender" class="radio">Your Gender *<br>
              <input type="radio" name="gender" value="Male" required>Male<br>
              <input type="radio" name="gender" value="Female">Female<br>
              <input type="radio" name="gender" value="None">Prefer not to say<br></label>
            </div>
            <div class="question">
              <label for="age_granted">Is your age over 17 and below 50? *<br>
              <input type="radio" name="age_granted" value="Yes" required> Yes<br>
              <input type="radio" name="age_granted" value="No"> No<br></label>
            </div>
            <div class="question">
              <label for="weight_granted">Is your weight above 50? *(.in kg) *<br>
              <input type="radio" name="weight_granted" value="Yes" required> Yes<br>
              <input type="radio" name="weight_granted" value="No"> No<br></label>
            </div>
            <div class="question">
              <label for="height_granted">Is your height above 5 feet ? *(.approx in kg) *<br>
              <input type="radio" name="height_granted" value="Yes" required> Yes<br>
              <input type="radio" name="height_granted" value="No"> No<br></label>
            </div>
            <div class="question">
              <label for="blood_group">What is your Blood Group? *<br>
              <input type="radio" name="blood_group" value="A+" required> A+<br>
              <input type="radio" name="blood_group" value="B+"> B+<br>
              <input type="radio" name="blood_group" value="AB+"> AB+<br>
              <input type="radio" name="blood_group" value="O+"> O+<br>
              <input type="radio" name="blood_group" value="A-"> A-<br>
              <input type="radio" name="blood_group" value="B-"> B-<br>
              <input type="radio" name="blood_group" value="AB-"> AB-<br>
              <input type="radio" name="blood_group" value="O-"> O-<br></label>
            </div>
            <div class="question">
              <label for="previous_donator">Did you donate blood before? *<br>
                <input type="radio" name="previous_donator" value="Yes" required>Yes<br>
                <input type="radio" name="previous_donator" value="No">No<br>
              </label>
            </div>
            <div class="question">
              <label for="regular_medicine">Do you take any kind of regular medicine? *<br>
                <input type="radio" name="regular_medicine" value="Yes" required>Yes<br>
                <input type="radio" name="regular_medicine" value="No">No<br>
              </label>
            </div>
            <div class="question">
              <label for="smoker">Do you smoke? *<br>
                <input type="radio" name="smoker" value="Yes" required>Yes<br>
                <input type="radio" name="smoker" value="No">No<br>
                <input type="radio" name="smoker" value="Not_regular">Not Regular<br>
              </label>
            </div>
            <div class="question">
              <label for="alcohol">Do you drink alcohol ? *<br>
                <input type="radio" name="alcohol" value="Yes" required>Yes<br>
                <input type="radio" name="alcohol" value="No">No<br>
                <input type="radio" name="alcohol" value="Ocassionaly">Ocassionaly<br>
              </label>
            </div>
            <div class="question">
              <label for="drugs_addiction">Do you have any addiction of drugs? *<br>
                <input type="radio" name="drugs_addiction" value="Yes" required>Yes<br>
                <input type="radio" name="drugs_addiction" value="No">No<br>
              </label>
            </div>
            <div class="question">
              <label for="contact_number">Your Contact number *</label>
              <input type="number" name="contact_number" placeholder="Your number" required>
            </div>
            <div class="question">
              <label for="current_place">Where do you currently live in? *(.district name)<br>
                <input type="text" name="current_place" placeholder="Your Place" required>
            </div>
            <div class="question">
              <label for="agree">
                <input type="checkbox" name="agree" value="Agree" required>
                I agree that, all the information I have provided are true
                and they won't be misused.
              </label>
            </div>
            <input type="submit" name="submit" >
          </form>
        </div>
  </body>
</html>


