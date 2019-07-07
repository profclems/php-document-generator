

<!DOCTYPE html>
<html>
<head>
	<title>EWC Generator - Generate Word, Excel and CSV files from HTML, text files, etc</title>
</head>
<body>

	<div class="container">
  <div class="form form-stacked">
    <div class="form-block">
      <label class="label" for="board_content">Content</label>
      <form method="post" action="submit.php">
        <textarea name="text_input" placeholder="Enter your html code or plain text here." class="textarea-tall" id="board_content"></textarea>
        <div style="width: 100%">
          <button type="submit">Convert to Word</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>

<style type="text/css">
	
	* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  line-height: 1.5;
  font-size: 18px;
}

button {
	background: green;
	color: #fff;
	border-radius: 5px;
	padding: 10px;
}

.container {
  max-width: 600px;
  margin: 0 auto;
}

.form textarea {
  background: #F5F5F5;
  border-color: #D8D8D8;
  border-style: solid;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  border-width: 1px;
  box-shadow: none;
  display: inline-block;
  max-width: 100%;
  padding: 0.75rem;
  -webkit-appearance: none;
}

.form textarea:focus {
  background: #FFF;
  border-color: #338EDA;
  outline: 0;
}
.form textarea, .form .textarea {
  min-height: 150px;
}
.form input[type="submit"]:focus {
  border: none;
  outline: 0;
}
.form .textarea-tall {
  min-height: 300px;
}

.form-stacked textarea {
  display: block;
  margin-bottom: 1.5rem;
  width: 100%;
}

.form-block {
  position: relative;
}

.form textarea {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.label {
  display: block;
  font-weight: 600;
  text-transform: uppercase;
  margin-bottom: 0.375rem;
  font-size: 0.875rem;
}

</style>
</html>