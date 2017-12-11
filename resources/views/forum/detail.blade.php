<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
        <link href="{{asset('css/froala_editor.min.css')}}" rel="stylesheet" type="text/css">
        <title>@Model.title</title>
        <link rel="stylesheet" href="{{asset('css/detail.css')}}">
        <script src="{{asset('js/detail.js')}}"></script>
    </head>
    @include('common.nav')
    <body>
        <div class="notice">
            <div class="title">
                <h1>{{$forum->title}}</h1>
                <span class="user">{{$user->name}}</span>
                <span class="time">{{$forum->time}}</span>
            </div>
            <div class="content">
                {{$forum->content}}
            </div>
            @foreach($comments as $key => $comment)
                <div class="comment">
                <div class="line">
                    <div class="author">
                        <ul class="p_author">
                            <li class="icon">
                                <img src="{{\App\Users::where('id',$comment->user_id)->first()->img}}" alt="">
                            </li>
                            <li class="p_name">
                                <span class="user">{{\App\Users::where('id',$comment->user_id)->first()->name}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="content_main">
                        <div class="p_content">
                            {{$comment->content}}
                        </div>
                        <form action="" method="post">
                            <div class="core_reply add-com">
                                <input type="hidden" name="content" class="recon" />
                                <input type="hidden" name="forum_id" value="@item.forum_id" />
                                <input type="hidden" name="comment_id" value="@item.Id" />
                                <ul class="p_tail">
                                    <li><span>{{$comment->time}}</span></li>
                                    <li><span class="reply">回复</span></li>
                                    <li><span>{{($key+1)}}楼</span></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="clear"></div>

        <form action="{{url('comment')}}" method="post">
        {{csrf_field()}}
        <div class="edit">
            <section id="editor">
                <div id='edit'></div>
                <input name="forumId" value="{{$forum->forum_no}}" type="hidden" />
                <input id="com" name="content" type="hidden">
            </section>
            <input id="sub" type="submit" value="立即评论">
        </div>
    </form>

        <script src="{{asset('js/jquery-1.11.3.js')}}"></script>
        <script src="{{asset('js/froala_editor.min.js')}}"></script>

        <script src="{{asset('js/plugins/tables.min.js')}}"></script>
        <script src="{{asset('js/plugins/lists.min.js')}}"></script>
        <script src="{{asset('js/plugins/colors.min.js')}}"></script>
        <script src="{{asset('js/plugins/media_manager.min.js')}}"></script>
        <script src="{{asset('js/plugins/font_family.min.js')}}"></script>
        <script src="{{asset('js/plugins/font_size.min.js')}}"></script>
        <script src="{{asset('js/plugins/block_styles.min.js')}}"></script>
        <script src="{{asset('js/plugins/video.min.js')}}"></script>

        <script>
            $(function(){
                $('#edit').editable({inlineMode: false, alwaysBlank: true, height: '200px'})
            });
            $('#sub').click(function () {
                var content = $('#edit').find('.froala-element').text();
                $('#com').attr("value", content);
            });
        </script>
    </body>
</html>
