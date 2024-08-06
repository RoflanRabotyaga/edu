<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Lab 2.1 - 2.6</title>
		<style>
			@media screen{
				h1{
					text-align: center;
				}
                h2{
                    text-align: center;
                }
				body{
					background-color: yellow;
				}
				form:first-child{
					text-align: center;
					margin: 20px auto;
				}
                iframe{
                    border: 2px solid grey;
                }
                p{
                    margin: 20px auto;
                    width: 80%;
                }
                nav{
                    position: absolute;
                    bottom: 75%;
                    float: left;
                }
                form{
                    float: left;
                    margin: 30px 100px 30px 50px;
                }
                span{
                    color: green;
                    font-weight: bold;
                }
			}
		</style>
	</head>
	<body>
        <div style="height=200px">
            <h3 style="text-align: right">
                <span>Lab2.1-2.3: </span>
                <!--Labs 2.1 - 2.3-->
                <?php
                    $weekday=strftime('%A');
                    $day=strftime('%e');
                    $mon=strftime('%B');
                    $year=strftime('%Y');
                    echo "Today is $weekday, the {$day}th of $mon, year $year";
                ?>
            </h3>
        </div>
		<header>
            <h1>
                <span>Lab2.4: </span>
                <!--Lab 2.4-->
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
            <h2>
                <span>Lab2.5: </span>
                <!--Lab 2.5-->
                <?php
                    $size = ini_get(post_max_size);
                    switch ($size):
                        case preg_match("/K/", $size)==1:
                            $size *= 1000;
                            break;
                        case preg_match("/M/", $size)==1:
                            $size *= 1000000;
                            break;
                        case preg_match("/G/", $size)==1:
                            $size *= 1e+9;
                            break;
                        case preg_match("/T/", $size)==1:
                            $size *= 1e+12;
                            break;
                        default:
                            break;
                    endswitch;
                    echo "Maximal size of posted data: $size bytes";
                ?>
            <br></h2>
		</header>
		<nav>
            <span>Lab2.6: <br/></span><br/>
            <!-- Lab 2.6 -->
            <?php
                $leftMenu = [
                    ['link'=>'php configuration info', 'href'=>'info.php'],
                    ['link'=>'Our project', 'href'=>'php_labs_den2.php'],
                    ['link'=>'Requiem', 'href'=>''],
                ];
            ?>
			<a href="<?= $leftMenu[0]['href']?>" target="content"><?= $leftMenu[0]['link']?></a><br/><br/>
			<a href="<?= $leftMenu[1]['href']?>" target="content"><?= $leftMenu[1]['link']?></a><br/><br/>
			<a href="<?= $leftMenu[2]['href']?>" target="content"><?= $leftMenu[2]['link']?></a><br/>
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
						    value="email@gmail.com"
					/>
					<br/>
					<input name="password"
						   type="text"
						   placeholder="password"
						   pattern="^password2$"
						   list="passwordlist"
					/>
					<datalist id="passwordlist">
						<option value="password1"/>
						<option value="password2"/>
						<option value="Password3"/>
					</datalist>
					<input style="margin-left: 10px"
							name="send"
						    type="submit"
						    value="send"
					/>
					<br/>
					<input name="checkbox"
						   type="checkbox"
						   id="check_status"
						   title=""
						   checked
					/>
					<label for="check_status">Remember me</label><br/><br/>
				</fieldset>
				<br/>
				<fieldset style="width: 250px">
					<legend>Allowance registration</legend>
					<label for="multiple_status">Your status</label><br/>
					<select name="multiple_choice" id="multiple_status" style="width: 155px">
						<option>status_1</option>
						<option>status_2</option>
						<option>status_3</option>
						<option>status_4</option>
						<option>other/additional</option>
					</select>
					<br/>
					<textarea style="width: 150px"
							name="other"
							placeholder="other/additional"
							rows="1"
					></textarea>
					<input style="margin-left: 20px"
							name="send"
						    type="reset"
						    value="approve"
					/>
					<div style="text-align: center">
						<br/>
						<label for="r2">You are human?(captcha)</label><br/>
						<input style="text-align: center"
							   type="radio"
							   name="r"
							   value="true"
							   id="r1"
							   checked
						>
						<label for="r1">No</label>
						<input type="radio"
							   value="false"
							   name="r"
							   id="r2"
						>
						<label for="r2">Yes</label><br/>
						<br/>
					</div>
				</fieldset>
			</form>
			<iframe src="info.php"
				name="content"
				width="68%"
				height="350px"
			></iframe>
		</section>
	</body>
</html>