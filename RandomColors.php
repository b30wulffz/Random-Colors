<html>
<head>
	<title>
		Random Colors&copy;SHLOK
	</title>
	<?php
		session_start();

	?>

	<script>

		function f(){
		
			setTimeout("window.location.reload(true);", 5);

			
			var a,e,b,z,c,d,p,q,alpha;
			alpha="0123456789abcdef";
			function main(){
			a=Math.random();
			b=Math.random();
			c=Math.random();
			d=Math.random();
			p=Math.random();
			q=Math.random();
			a=a*100;
			b=b*100;
			c=c*100;
			d=d*100;
			p=p*100;
			q=q*100;
			a=parseInt(a);
			b=parseInt(b);
			c=parseInt(c);
			d=parseInt(d);
			p=parseInt(p);
			q=parseInt(q);

			e=(alpha.charAt(a%16))+(alpha.charAt(b%16))+(alpha.charAt(c%16))+(alpha.charAt(d%16))+(alpha.charAt(p%16))+(alpha.charAt(q%16));

			z=e
			f="#"+z;
			document.bgColor=f;
			document.t.t1.value=f;
			}
			main();
		}

	</script>
</head>
<body onLoad="f()">
	<form name="t">
		<center>
			<h1>
				Welcome to Random Colors Program <sup>&copy;shlok</sup>
			</h1>
				<br>
			<h3> 
				Following Color is Generated
			</h3>
				<br>
			<input type="text" name="t1">
				<br>
			<h4>
				This page reloads every 5 milliseconds
				<br>
			<?php
				if(($_SESSION['a'])>=1)
				{
					$_SESSION['a']=$_SESSION['a']+1;
					echo "Colors generated are ".$_SESSION['a'];
				}
				else
				{
					$_SESSION['a']=1;
					echo "Colors generated are ".$_SESSION['a'];
				}			
			?>					
		</center>
	</form>
</body>

</html>