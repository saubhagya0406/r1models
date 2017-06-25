			    //Password Validation
				var p=document.getElementById('pwd');
				var cp=document.getElementById('cpwd');
				function validate()
				{
                    if(p.value.length<8 || p.value.length>20)
                    {
                        p.setCustomValidity('Password should be 8-20 charecters');
                        document.getElementById('su').removeAttribute('href');
						document.getElementById('su').classList.add('inactive');
                    }
                    else
                    {
                        p.setCustomValidity('');
						if(p.value!=cp.value)
						{	
							cp.setCustomValidity("Password's Don't Match");
							document.getElementById('su').removeAttribute('href');
							document.getElementById('su').classList.add('inactive');
						}
						else
						{
							cp.setCustomValidity("");
							document.getElementById('su').href="#modal";
							document.getElementById('su').classList.remove('inactive');
						}
					}
				}
				p.onchange=validate;
				cp.onkeyup=validate;

			//EmailID Validation
				var e=document.getElementById('eid');
				function che()
				{
					if(e.value.length!=0)
					{
					var x=new XMLHttpRequest();
					x.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200)
						{
							if(this.responseText === "Success")
							{
								e.setCustomValidity("");
								document.getElementById('su').href="#modal";
								document.getElementById('su').classList.remove('inactive');
							}
							else
							{
								e.setCustomValidity("Email Address already exists");
								document.getElementById('su').removeAttribute('href');
								document.getElementById('su').classList.add('inactive');
							}
						}
					};
					var txt="php/che.php?q="+e.value;
					x.open("GET",txt,true);
					x.send();
					}
				}
				e.onkeyup=che;
				e.onchange=che;

			//Username Validation
				var u=document.getElementById('usr');
				function chu()
				{
					if(u.value.length!=0)
					{
					var x=new XMLHttpRequest();
					x.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200)
						{
							if(this.responseText === "Success")
							{
								u.setCustomValidity("");
								document.getElementById('su').href="#modal";
								document.getElementById('su').classList.remove('inactive');
							}
							else
							{
								u.setCustomValidity("Username already exists");
								document.getElementById('su').removeAttribute('href');
								document.getElementById('su').classList.add('inactive');
							}
						}
					};
					var txt="php/chu.php?q="+u.value;
					x.open("GET",txt,true);
					x.send();
					}
				}
				u.onkeyup=chu;
				u.onchange=chu;
