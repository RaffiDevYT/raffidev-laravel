 <form class="formShadows">
 <h2>REGISTRASI</h2>
 <p>Masuk Menggunakan</p>
 <span class="socialBox">
 <a style="background: #F19299" href="#"></a>
 <a style="background: #92AAF1" href="#"></a>
 </span>
 <p>- Atau Menggunakan Email -</p>
 <input class="textBox" placeholder='Email' type="text" name="">
 <input class="textBox" placeholder='Username' type="text" name="">
 <input class="textBox" placeholder='Password' type="password" name="">
 <span class="checkBox">
 <input type="checkbox" name="privacy">
 <label for="privacy"> Menyetujui <a href="">syarat dan ketentuan</a> <span
 class="requir">*</span></label>
 </span>
 <p class="disclaimer">Melanggar syarat dan ketentuan dapat menyebabkan</br>akun Anda di BAN oleh gak tau</p>
 <button class="buttonShadow" type="submit">Daftar</button>
 <hr>
 <a class="copyright" href="">@adin_yahya</a>
 </form>

<style>$font: Mono,monospace; 

body{
	background-size: #fff;
	height: 100vh;	
	overflow: hidden;
	display: flex;
	align-items: center;
	justify-content: center;
	font-family: $font;
}
.formShadows{
	position: relative;
	background-color: #fff;
	padding: 20px 20px;
  border-radius: 7px;
  border-style: solid;
  border-width: medium;
  box-shadow: 7px 7px;
  text-align: center;
  
  h2{
    text-align: center;
    letter-spacing: -1px;
    text-decoration: underline;
    font-size: 25px;
  }
  
  p{
    font-size: 15px;
    text-decoration: none;
    font-weight: 200;
    text-align: center;
  }
  
  .socialBox a {
    color: black;
    background: #fff;
    border-style: solid;
    border-color: black;
    box-shadow: 5px 5px;
    border-radius: 7px;
    text-align:center;
    text-decoration:none;
    font-family:fontawesome;
    position: relative;
    display: inline-block;
    width:15px;
    height:15px;
    padding:10px;
    margin:0 1px;
    font-size: 15px;
  }

  .socialBox a:hover {
    background: #ef92a3;
    box-shadow: 3px 3px;
    cursor: pointer;
  }
  
  .socialBox a:nth-of-type(1):before {
  content:'\f1a0';
  }
  .socialBox a:nth-of-type(2):before {
  content:'\f082';
  }
  
  .textBox{
    display: block;
    margin: 1rem 0;
    width: 95%;
    padding: 12px 14px;
    font-size: 15px;
    border-radius: 7px;
    border-style: solid;
    border-width: 1px;
    background-color: #fff;
    outline: none;
    font-family: $font;
  }
  
  .checkBox{
    display: flex;
    width: 100%;
    font-size: 15px;
    font-weight: 400;
    
    label{
      padding-left: 5px;
      letter-spacing: -1px;
      font-family: $font;
    }
    
    a{
      color: black;
    }
    
    .requir{
      color: red;
      font-size: 15px;
    }
  } 
  
  .disclaimer{
    padding-left: 5px;
    letter-spacing: -1px;
    font-family: $font;
    font-size: 15px;
    font-weight: 400;
    text-align:left;
  }
  
  .forget{
      display: block;
      text-align: center;
      color: black;
      text-decoration: none;
      font-size: 15px;
      margin-bottom: 20px;
      font-family: $font;
  }
  
  .copyright{
      margin-top: 10px;
      display: block;
      text-align: center;
      color: black;
      text-decoration: none;
      font-size: 13px;
  }
  
  .buttonShadow{
    color: black;
    text-align: center;
    font-size: 18px;
    line-height: 40px;
    width: 200px;
    height: 50px;
    border-color: black;
    border-style: solid;
    background-color: #F1E592;
    margin: 10px 10px 20px 10px;
    border-radius: 7px;
    box-shadow: 7px 7px;
    font-family: $font;
    font-weight: 500;
  }
  
  .buttonShadow:hover {
    box-shadow: 4px 4px;
    cursor: pointer;
  }
}</style><?php /**PATH C:\Users\clov\Desktop\raffidev-laravel\resources\views/user/tes.blade.php ENDPATH**/ ?>