<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/entireframework.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/reveal.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/jqalert.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/jquery.1.9.1.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.reveal.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jqalert.js') }}"></script>
    
    <script type="text/javascript">
	    function checkform(){

	    	var user = $("#user");
	    	var pwd = $("#pwd");
	    	var _token = $("input[name=_token]").val();

	    	if(user.val() == ''){
	    		jqalert({
	                title: '提示',
	                content: '用户名必填'
	            });
	    		user.focus();
	    		return false;
	    	}

	    	if(pwd.val() == ''){
	    		jqalert({
	                title: '提示',
	                content: '密码必填'
	            });
	    		pwd.focus();
	    		return false;
	    	}

	    	$.ajax({  
		      type: "POST",  
		      url: "/member/login",  
		      data: {"user":user.val(),"pwd":pwd.val(),"_token":_token},
		      cache: false,
		      beforeSend: function(){
		      },  
		      success: function(data){ 
		          var text = data.replace(/\s/g, "");
		          if(text == ''){
		              jqalert({
		                title: '提示',
		                content: '登录成功',
		                yesfn: function() {
		                  window.location.reload();
		                }
		              });
		          }else{
		            jqalert({
		              title: '提示',
		              content: text
		            });
		            return false;
		          } 
		      },
		      error: function(jqXHR, textStatus, errorMsg){
		      }   
		    }); 

	    }
    </script>
    <body>

        <header>
            <span class="fr">
            	@if (Request::session()->exists('member'))
            		<a href="">{{Request::session()->get('member.nickname')}}</a>  <a href="/member/logout">退出</a>
		    	@else
		    		<a href="#" data-reveal-id="myLogin">登录</a>  <a href="#" data-reveal-id="myRegister">注册</a>
		    	@endif
            	
            </span>
        </header>

        <div class="main">
        	@yield('content')
        </div>

        <footer></footer>

		<div id="myLogin" class="reveal-modal">
		    <h2>登录</h2>
		    <br/>
		    <form name="login" id="login" method="POST">
			    <p><input type="text" id="user" name="user"/></p>
			    <p><input type="password" id="pwd" name="pwd"/></p>
			    <p>
			        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
			        <input type="button" class="fl mr10" value="提交" onclick="checkform()" />
			    </p>
		    </form>
			<a class="close-reveal-modal">×</a>
		</div>

    </body>
</html>