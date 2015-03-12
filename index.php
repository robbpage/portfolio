<?PHP include('header.php'); ?>

<!--  S P L A S H  -->
<div id="nameSHELL" class="whiteS shadow">
	<div id="nameNAME" class="s100">ROBB PAGE</div>
	<div id="nameSUB" class="s20 spaced">ONLINE R&Eacute;SUM&Eacute; AND PORTFOLIO</div>
</div>

<!--  P R O F I L E  -->
<?PHP
# set age variable
$birthDATE = "02/16/1976";
$birthDATE = explode("/", $birthDATE);
$age = (date("md", date("U", mktime(0, 0, 0, $birthDATE[0], $birthDATE[1], $birthDATE[2]))) > date("md") ? ((date("Y") - $birthDATE[2]) - 1) : (date("Y") - $birthDATE[2]));
?>
<div id="proSHELL">
	<div class="container">
		<div id="proHEAD" class="row"><span class="s60 blueD bold">PROFILE</span><br /><br /><br /><span class="s30 grayM">I am a creative PHP developer and website designer</span><br /><span class="s14 grayL">and I'm obsessed with space</span></div>
		<div class="row">
			<div id="proDEETS" class="col-md-4 s20 grayM">
			<span class="bold blueD s16">MY NAME:</span><br />Robb Page<br /><br /><br />
			<span class="bold blueD s16">MY AGE:</span><br /><?PHP echo $age; ?> years old<br /><br /><br />
			<span class="bold blueD s16">LOCATION:</span><br />Delray Beach Florida<br /><br /><br />
			<span class="bold blueD s16">FAVORITE FOOD:</span><br />Beer<br /><br /><br />
			</div>
			<div id="proASTRO" class="col-md-4"><img src="img/astronaut.png" class="img-responsive img-center" /></div>
			<div id="proBLURB" class="col-md-4 s16 grayM">
			I am a full-service web developer.  From design to development I do it all.  I have an exacting attention to detail and focus and I am meticulous about making sure every little detail is perfect and that the website is running at optimal performance.<br /><br />
			I work great with a team as well. I not only have the willingness to learn from others but the <strong><em>desire</em></strong> to do so.  I never stop trying to improve my skillset.
			</div>
		</div>
		<div id="proQUOTE" class="row"><span class="s30 grayL"><em>"Somewhere, something incredible is waiting to be known."</em><br /><br /><span class="s20 grayM">Carl Sagan</span></div>
	</div>
</div>

<!--  S K I L L S  -->
<div id="skillSHELL">
	<div class="container">
		<div id="skillHEAD" class="row"><span class="s60 white bold">SKILLS</span><br /><br /><br /><span class="s30 grayL">I've been doing this for almost twenty years now.</span><br /><span class="s14 blueDD">but I'm young at heart</span></div>
		<div class="row">
			<div id="skillROCKET" class="col-md-6"><img class="img-responsive img-center" src="img/rocketship.png" /></div>
			<div class="col-md-6 s20 white">
			
			<table class="table">
				<tr>
					<td><img src="img/icon_css.jpg" /></td>
					<td>HTML/CSS <span class="s14 grayL">(18 years)</span></td>
					<td class="text-right hidden-xs"><span class="glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span></td>
				</tr>
				<tr>
					<td><img src="img/icon_ps.jpg" /></td>
					<td>Adobe Photoshop <span class="s14 grayL">(18 years)</span></td>
					<td class="text-right hidden-xs"><span class="glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span></td>
				</tr>
				<tr>
					<td><img src="img/icon_dw.jpg" /></td>
					<td>Adobe Dreamweaver <span class="s14 grayL">(18 years)</span></td>
					<td class="text-right hidden-xs"><span class="glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span></td>
				</tr>
				<tr>
					<td><img src="img/icon_php.jpg" /></td>
					<td>PHP/MySQL <span class="s14 grayL">(10 years)</span></td>
					<td class="text-right hidden-xs"><span class="glyphicon glyphicon-star white"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 blueDD glyphicon glyphicon-star"></span></td>
				</tr>
				<tr>
					<td><img src="img/icon_jq.jpg" /></td>
					<td>Javascript/jQuery <span class="s14 grayL">(6 years)</span></td>
					<td class="text-right hidden-xs"><span class="glyphicon glyphicon-star white"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 white glyphicon glyphicon-star"></span> <span class="s20 blueDD glyphicon glyphicon-star"></span></td>
				</tr>
			</table>
			<p style="text-align: justify; padding-top: 40px;" class="s16">These are my “bread and butter” skills but I am also very good with many other software packages (Illustrator, Flash, Office, etc.) and I am constantly striving to improve my skillset by learning new things.  I am most comfortable on a PC but am just as effective on a Mac.  I have many years of experience managing a web department and employees. I am great at what I do and enjoy providing my expertise to those who can benefit from it.</p>
			</div>
		</div>
		<div class="skillQUOTE row"><span class="s30 grayL"><em>"I do not think there is any thrill that can go through the human heart like that felt by the inventor as he sees some creation of the brain unfolding to success..."</em><br /><br /><span class="s20 white">Nikola Tesla</span></div>
	</div>
</div>

<!--  C A R E E R  -->
<div id="carSHELL">
	<div class="container">
		<div class="carHEAD row"><span class="s60 blueD bold">CAREER</span><br /><br /><br /><span class="s30 grayM">I've worked with some great people at some great companies.</span><br /><span class="s14 grayL">and one bad one</span></div>
		<div class="carLEFT col-md-3">
		<span class="s24 bold black">QEP Corporation</span><br />
		<span class="s12 bold blueD"><span class="glyphicon glyphicon-calendar s14"></span> 2008 - 2015</span><br />
		<span class="s12 bold blueD"><span class="glyphicon glyphicon-globe s14"></span> BOCA RATON, FLORIDA</span>
		</div>
		<div class="carRIGHT col-md-9">
		<span class="s20 bold blueD"><em>Web Developer / Designer / Manager</em></span><br />
		<span class="s14 grayM">QEP is a global company with locations in England, France, Australia, China and all across the United States, specializing in the flooring industry (hardwood, laminate and tools).  I ran the web department and designed, developed and maintained their global web presence for the better part of a seven years.  I modernized and streamlined their online portfolio to better position the company for the future and the associated challenges.  I developed a custom content-management system that enables product managers to more easily control their product information and keep the support files up to date so that customers consistently have the information they need.</span><br /><br />
		<span class="glyphicon glyphicon-link"></span>&nbsp; <a href="http://www.qepcorporate.com" class="s16 bold">http://www.qepcorporate.com</a>
		</div>
		<div class="carLEFT col-md-3">
		<span class="s24 bold black">Reagan Wireless</span><br />
		<span class="s12 bold blueD"><span class="glyphicon glyphicon-calendar s14"></span> 2006 - 2008</span><br />
		<span class="s12 bold blueD"><span class="glyphicon glyphicon-globe s14"></span> DEERFIELD BEACH, FLORIDA</span>
		</div>
		<div class="carRIGHT col-md-9">
		<span class="s20 bold blueD"><em>Web Developer / Designer / Manager</em></span><br />
		<span class="s14 grayM">Reagan Wireless is one of the top wholesalers of cellephones, parts and accessories to clients around the world.  As their web manager I designed and maintained the website to keep real-time inventory to assist the sales team and I created weekly, sometimes daily, email newsletters.</span><br /><br />
		<span class="glyphicon glyphicon-link"></span>&nbsp; <a href="http://www.reaganwireless.com" class="s16 bold">http://www.reaganwireless.com</a>
		</div>
		<div class="carLEFT col-md-3">
		<span class="s24 bold black">Twin Design</span><br />
		<span class="s12 bold blueD"><span class="glyphicon glyphicon-calendar s14"></span> 2003 - PRESENT</span><br />
		<span class="s12 bold blueD"><span class="glyphicon glyphicon-globe s14"></span> DELRAY BEACH & BOCA RATON, FLORIDA</span>
		</div>
		<div class="carRIGHT col-md-9">
		<span class="s20 bold blueD"><em>Co-Founder / Designer / Developer</em></span><br />
		<span class="s14 grayM">My twin brother and I started our own company in order to better manage our various freelance and personal projects.  We've had clients ranging from restaraunts to doctors and continue to work on personal projects to improve our skills.</span><br /><br />
		<span class="glyphicon glyphicon-link"></span>&nbsp; <a href="http://www.twin-design.com" class="s16 bold">http://www.twin-design.com</a>
		</div>
		<div class="carLEFT col-md-3">
		<span class="s24 bold black">Consilio Inc.</span><br />
		<span class="s12 bold blueD"><span class="glyphicon glyphicon-calendar s14"></span> 2002 - 2003</span><br />
		<span class="s12 bold blueD"><span class="glyphicon glyphicon-globe s14"></span> WALLED LAKE, MICHIGAN</span>
		</div>
		<div class="carRIGHT col-md-9">
		<span class="s20 bold blueD"><em>Web Designer</em></span><br />
		<span class="s14 grayM">A start-up that had the goal of revolutionizing the online wedding invitation business.  Sadly, the idea was a little ahead of it's time and the company folded but the work we did was incredibly advanced given the technology limits of the time.  These days it would be infinitely easier to acheive our goals.</span><br /><br />
		</div>
		<div class="carLEFT col-md-3">
		<span class="s24 bold black">Sites & Sounds</span><br />
		<span class="s12 bold blueD"><span class="glyphicon glyphicon-calendar s14"></span> 1996 - 2002</span><br />
		<span class="s12 bold blueD"><span class="glyphicon glyphicon-globe s14"></span> ANN ARBOR, MICHIGAN</span>
		</div>
		<div class="carRIGHT col-md-9">
		<span class="s20 bold blueD"><em>Web Designer</em></span><br />
		<span class="s14 grayM">I got my start in the business with this company back in the very early days of that crazy new thing called "the internet".  Designing and programming websites in notepad at the very start we eventually moved up to Photoshop and Dreamweaver but learning the ropes with pure notepad programming has made a much stronger programmer today.  I worked on several high profile sites including Al Roker and Cindy Margolis.</span><br /><br />
		<span class="glyphicon glyphicon-link"></span>&nbsp; <a href="http://www.sitesandsounds.com" class="s16 bold">http://www.sitesandsounds.com</a>
		</div>
		<div class="skillQUOTE row"><br /><span class="s30 grayL"><em>"It's the great tragedy - people employed in ways that don't fully tap everything they do best in life."</em><br /><br /><span class="s20 grayM">Neil deGrasse Tyson</span></div>
	</div>
</div>

<!--  W O R K  -->
<div id="workSHELL">
	<div class="container">
		<div class="carHEAD row"><span class="s60 blueD bold">PORTFOLIO</span><br /><br /><br /><span class="s30 grayM">Here is a small sample of some of my work</span><br /><span class="s14 grayL">can't possibly list them all</span></div>
		<div class="workLEFT col-md-6"><img class="img-responsive img-center" src="img/work_qepco.jpg" alt="QEP Corporate Website" /><br /><a tabindex="0" class="btn btn-primary" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="QEP Corporate Website" data-content="The main website for QEP Corporation. You can find links to most of my recent work here. A couple of the sites are not my work as they were existing sites when QEP acquired the company and I haven't had time to redo them yet (HINT: the ones that don't look good.)"><span class="glyphicon glyphicon-info-sign"></span> Information</a>&nbsp;&nbsp;<button class="btn btn-primary" onclick="window.open('http://www.qepcorporate.com');"><span class="glyphicon glyphicon-globe"></span> Visit Website</button></div>
		<div id="" class="workRIGHT col-md-6"><img class="img-responsive img-center"  src="img/work_harris.jpg" alt="Harris Wood Website" /><br /><a tabindex="0" class="btn btn-primary" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="Harris Wood Floors Website" data-content="Harris Wood manufactures premium hard wood flooring and needed an elegant website that was easy to navigate and informative."><span class="glyphicon glyphicon-info-sign"></span> Information</a>&nbsp;&nbsp;<button class="btn btn-primary" onclick="window.open('http://www.harriswoodfloors.com');"><span class="glyphicon glyphicon-globe"></span> Visit Website</button></div>
		<div class="workLEFT col-md-6"><img class="img-responsive img-center"  src="img/work_faus.jpg" alt="Fausfloor Website" /><br /><a tabindex="0" class="btn btn-primary" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="Fausfloor Website" data-content="Fausfloor manufactures premium laminate flooring products and needed a website to showcase that laminate flooring is just as viable an option as hardwood (and in many cases, a BETTER option)."><span class="glyphicon glyphicon-info-sign"></span> Information</a>&nbsp;&nbsp;<button class="btn btn-primary" onclick="window.open('http://www.fausfloor.com');"><span class="glyphicon glyphicon-globe"></span> Visit Website</button></div>
		<div class="workRIGHT col-md-6"><img class="img-responsive img-center"  src="img/work_vitrex.jpg" alt="Vitrix Website" /><br /><a tabindex="0" class="btn btn-primary" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="Vitrex Website" data-content="Vitrex is a major supplier for the DIY flooring market in the UK.  Their website is easy to navigate and their customers can easily find the information they are looking for."><span class="glyphicon glyphicon-info-sign"></span> Information</a>&nbsp;&nbsp;<button class="btn btn-primary" onclick="window.open('http://www.vitrex.co.uk');"><span class="glyphicon glyphicon-globe"></span> Visit Website</button></div>
		<div class="workLEFT col-md-6"><img class="img-responsive img-center"  src="img/work_qep.jpg" alt="QEP Tools Website" /><br /><a tabindex="0" class="btn btn-primary" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="QEP Tools Website" data-content="The main brand website for QEP.  Ease of use was the key for this one and people always talk about how easy it is to navigate and find what they are looking for."><span class="glyphicon glyphicon-info-sign"></span> Information</a>&nbsp;&nbsp;<button class="btn btn-primary" onclick="window.open('http://www.qep.com');"><span class="glyphicon glyphicon-globe"></span> Visit Website</button></div>
		<div class="workRIGHT col-md-6"><img class="img-responsive img-center"  src="img/work_pmm.jpg" alt="PMM Products Website" /><br /><a tabindex="0" class="btn btn-primary" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="PMM Products Website" data-content="Again, ease of navigation was very important as this company offers a LOT of different options and styles."><span class="glyphicon glyphicon-info-sign"></span> Information</a>&nbsp;&nbsp;<button class="btn btn-primary" onclick="window.open('http://www.pmmproducts.com');"><span class="glyphicon glyphicon-globe"></span> Visit Website</button></div>
		<div class="skillQUOTE row"><br /><span class="s30 grayL"><em>"I really am motivated by being able to work with great people and create a body of work that I can look back and be proud of."</em><br /><br /><span class="s20 grayM">Leonardo DiCaprio</span></div>
	</div>
</div>

<!--  C O N T A C T  -->
<div id="contSHELL">
	<div class="container">
		<div id="contHEAD" class="row"><span class="s60 white bold">CONTACT</span><br /><br /><br /><span class="s30 grayL">Use the form below to get in touch with me.</span><br /><span class="s14 blueDD">I'll reply fairly quickly</span></div>
		<div class="row">
			<div class="col-md-5">
				<img id="contDMAL" src="img/astronautDEUX.png" class="img-responsive img-center" alt="Drop me a line" />
				<img id="contPFOTEF" src="img/astronaut3.png" class="img-responsive img-center" alt="Please fill out the entire form" />
			</div>
			<div class="col-md-7">
				<form class="form-horizontal">
				<label for="contNAME" class="control-label white s14">NAME</label><br />
				<input type="text" class="form-control" id="contNAME" placeholder="Your Name"><br />
			  	<label for="contEMAIL" class="control-label white s14">EMAIL</label><br />
				<input type="text" class="form-control" id="contEMAIL" placeholder="Your Email"><br />
				<label for="contCOMP" class="control-label white s14">COMPANY</label><br />
				<input type="text" class="form-control" id="contCOMP" placeholder="Your Company"><br />
				<label for="contMSG" class="control-label white s14">MESSAGE</label><br />
				<textarea class="form-control" id="contMSG" rows="9" placeholder="Your Message"></textarea>
				</form>
				<div id="contBUTT" class="row s14 bold white"><button class="btn btn-lg btn-primary" onclick="contSUB();">send message</button>
			</div>
		</div>
		<div id="contQUOTE"><span class="s30 grayL"><em>"Is a hippopotamus a hippopotamus, or just a really cool opotamus?"</em><br /><br /><span class="s20 white">Mitch Hedberg</span></div>
	</div>
</div>
<?PHP include('footer.php'); ?>
