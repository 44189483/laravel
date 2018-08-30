@extends('Home.layout')
    @section('title', '文章详情')
    @section('content')
        <div class="item">
            <h3 class="tc">{{ $article->title }}</h3>
            <p class="tc line">发表于{{ $article->createTime }}</p>
            <div>{!! $article->content !!}</div>
            <p class="tc"><a href="javascript:history.back()">返回</a></p>
        </div>
        @if (count($article->comments) > 0)
        <div class="item">
            <span>评论列表</span>
            @foreach($article->comments as $comment)
            <div class="comment">
                <p>#{{$loop->iteration}}楼 {{ $comment->createTime }} {{ $comment->nickname}} 

                @if (Request::session()->get('member.id') == $comment->mid)
                <a href="#comment" class="getcomment">编辑</a> 
                <a href="/del/{{$comment->id}}">删除</a>
                @endif

                </p>
                <div class="line" data-cid="{{ $comment->id }}">
                    {!! $comment->content !!}
                </div>
            </div>
            @endforeach
        </div>
        @endif

        <div class="item">
            <span>我要评论</span>

            @if (Request::session()->exists('member'))
                <form name="comment" id="comment" method="POST" action="/save">
                    <textarea id="editor_id" name="content" style="width:100%;height:300px;">
                    </textarea>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="aid" value="{{ $article->id }}" />
                    <input type="hidden" id="cid" name="cid"/>
                    <br/>
                    <input type="submit" class="fl mr10" name="submit" value="提交"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" class="fl" value="清除" />
                </form>

                @include('kindeditor::editor',['editor'=>'editor_id','items'=>"items:['fontsize', 'forecolor', 'bold', 'italic', 'underline','removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', '|', 'emoticons', 'image', 'link']"])

                <script type="text/javascript">
                   
                    //提交
                    $("input[type='submit']").click(function(){
                        var content = document.getElementsByTagName("iframe")[0].contentWindow.document.body.innerHTML;
                        if(content == ''){
                            alert("留言内容必填");
                            return false;
                        }
                    });

                    //文本赋值
                    $(".getcomment").click(function(){
                        var content = $(this).parent().siblings(".line");
                        $("#cid").val(content.attr("data-cid"));
                        document.getElementsByTagName("iframe")[0].contentWindow.document.body.innerHTML = content.html();
                    });

                    //清空复位
                    $("input[type='reset']").click(function(){
                        $("#cid").val('');
                    });

                </script>
            @else
                <a href="#" data-reveal-id="myLogin">登录</a>  <a href="#" data-reveal-id="myRegister">注册</a>
            @endif
               
        </div>
    @stop