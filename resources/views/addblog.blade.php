
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="{{('css/addpost.css')}}">
	<title>Add Blog</title>
	
</head>
<body> 
  <header>
      <a class="nav" href="{{URL::to('/home')}}">Home</a>
      <a class="nav"  href="{{url::to('/show-blogs')}}">Show Blogs</a>
  </header>
	<div class="container">
  <h1 class="title">ADD BLOG</h1>
   <form class="contact-form row" action="" method="POST">
   	@csrf
      <div class="form-field col-md-6">
      <label class="label" for="name">Category :</label>
         <input id="category" class="input-text js-input" type="text" name="category"required>
         
      </div>


      <section class="form-field col-md-6">

      <label class="label" for="tag">Tag :</label> 
            <div id="con">

            </div>

            <div>
                <input id="tag" type="text" class="input-text js-input" required>
            </div>
        </section>
      <!-- <div id="con">

</div>
      <div class="form-field col-md-6 ">
      
      
         <input id="tag" class="input-text js-input" type="text" name="tag" required>
         
      </div> -->
      <br>
      
      <div class="form-field col-md-12">
        <br><br>
      <label class="label" for="message">Write Your Blog here : </label>
      <br>
         <textarea id="post" class="input-text js-input" type="text" name="post" required></textarea>
         
      </div>
      <div class="form-field col-lg-12">
      <br><br>
         <input class="submit-btn" type="submit" value="Save">
      </div>
   </form>
  </div>
	
   

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{url('js/tag.js')}}"></script>
</body>
</html>




