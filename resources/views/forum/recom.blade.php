
    <div class="clear"></div>
    <div class="reply_content">
        <ul>
            @foreach ($coms as $com)
                <li class="people">
                    <div class="item">
                        <img src="{{\App\Users::where('id',$com->user_id)->first()->img}}" alt="">
                        <form action="" method="post">
                            <div class="word add-com">
                                <div class="w_content">
                                    <span class="user">{{\App\Users::where('id',$com->user_id)->first()->name}}</span>
                                    {{$com->content}}
                                </div>
                                <div class="clear"></div>
                                <div>
                                    <input type="hidden" name="content" class="recon"/>
                                    <input type="hidden" name="forum_id" value="@item.forum_id" />
                                    <input type="hidden" name="comment_id" value="@item.Id" />
                                    <ul class="w_tail">
                                        <li><span class="reply">回复</span></li>
                                        <li><span>{{$com->time}}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    @include('recom')
                </li>
               @endforeach
        </ul>
    </div>

