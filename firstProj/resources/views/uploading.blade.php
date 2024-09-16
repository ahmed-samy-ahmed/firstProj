<form method="post" enctype="multipart/form-data" action="/uploadimg">
@csrf
Course Name: 
<input type="text" name="cName">
<br>
Course Price: 
<input type="text" name="cPrice">
<br>
Course Hours: 
<input type="text" name="cHours">
<br>
image:
<input type="file" name="photo">
<br>
<input type="submit">
</form>