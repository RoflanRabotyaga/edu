<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Unemployment benefit</title>
		<style>
			@media screen{
				h1{
                    position: relative;
                    left: 150px;
					text-align: center;
				}
                h2{
                    text-align: center;
                }
				body{
					cursor: wait;
					background-color: yellow;
				}
				form:first-child{
					text-align: center;
					margin: 20px auto;
				}

			}
		</style>
		<link type="text/css" rel="stylesheet" href="iframe.css" media="print">
	</head>
	<body>
        <div style="float: right">
            <?php
                $day=strftime('%d');
                $mon=strftime('%B');
                $year=strftime('%Y');
                echo "Today is Friday, the {$day}th of $mon, year $year";
            ?>
        </div>
		<header>
            <h1>
                <?php
                    $hour = (int)strftime('%H');
                    if($hour < 5):
                        echo "Good night";
                    elseif($hour < 10):
                        echo "Good morning";
                    elseif($hour < 17):
                        echo "Good afternoon";
                    else:
                        echo "Good evening";
                    endif;
                ?>
            </h1>
		</header>
		<nav>
			<a href="article-1.html" target="content">Terms of use</a><br/>
			<a href="article-2.html" target="content">Privacy policy</a><br/>
			<a href="../4_1/php.html" target="content">Legal help</a>
		</nav>
		<section>
			<h2>About us</h2>
			<p>
			Lorem ipsum dolor sit amet, tunc agitans diam ' Mucro enim ad suis alteri formam. Piscatore mihi cum unde tu mihi servitute coniunx. Famuli dabit es est Apollonius non coepit, philomusia in modo ad te princeps. Nuda dulcis in rei sensibilium iussit in modo cavendum es ego esse more filiam in lucem. Iubeo singulas cotidie Apollonius eius non coepit. Zurciaca diebus tendit ad te in rei exultant deo apprehendit Apollonius ut a a patriam rex! Ac esse deprecor potest meum tibi alloquitur hanc si quod tamen alius coagulato scelesta nunc eius. Odore imo dictum aemulum toro frumento manu duas horrido in. Africus hortamento laetus moritur ad te sed quod tamen adnuente rediens eam ad nomine. Spero mihi esse more fuerit quis mihi. Theophile esse ait est cum obiectum est amet amet amet consensit cellula rei exultant deo! Lugens in fuerat est amet consensit cellula rei exultant deo hanc. Probo artium studiose rosa ad te princeps ea rege Apertius ingens se vero diam nostra paupercula possunt autem est se est Apollonius. Ad suis est in fuerat est Apollonius non coepit cenam ita ideo complesset orationis tibi coniungerent praesens fulgens materia amicis ad nomine. Eum filiam sunt forma in.
			</p>
			<form action="">
				<fieldset style="width: 250px">
					<legend>Sign In | Log In</legend>
					<input readonly
							name="login"
						    type="email"
						    placeholder="mail"
						    value="im_gay@gmail.com"
					/>
					<br/>
					<input name="password"
						   type="text"
						   placeholder="password"
						   pattern="^I_am_gay$"
						   list="passwordlist"
					/>
					<datalist id="passwordlist">
						<option value="I_am_gay"/>
						<option value="I_am_straight"/>
						<option value="Pride_month"/>
					</datalist>
					<input style="margin-left: 10px"
							name="send"
						    type="submit"
						    value="send"
					/>
					<br/>
					<input name="checkbox"
						   type="checkbox"
						   id="gay_status"
						   title="I`m gay"
						   checked
					/>
					<label for="gay_status">Status</label><br/><br/>
				</fieldset>
				<br/>
				<fieldset style="width: 250px">
					<legend>Allowance registration</legend>
					<label for="gender_status">Gender</label><br/>
					<select name="gender" id="gender_status" style="width: 155px">
						<option>non-binary</option>
						<option>queer</option>
						<option>trans</option>
						<option>gachimuchi</option>
						<option>other/additional</option>
					</select>
					<br/>
					<textarea style="width: 150px"
							name="other"
							placeholder="other/additional e.g. BLM"
							rows="1"
					></textarea>
					<input style="margin-left: 20px"
							name="send"
						    type="reset"
						    value="approve"
					/>
					<div style="text-align: center">
						<br/>
						<label for="r2">Are you social justice activist?</label><br/>
						<input style="text-align: center"
							   type="radio"
							   name="r"
							   value="1"
							   id="r1"
							   checked
						>
						<label for="r1">Yes</label>
						<input type="radio"
							   value="0"
							   name="r"
							   id="r2"
						>
						<label for="r2">No</label><br/>
						<br/>
					</div>
				</fieldset>
			</form>
			<iframe src="info.php"
				name="content"
				width="960px"
				height="410"
				style="border: none"
			></iframe>
		</section>
	</body>
</html>