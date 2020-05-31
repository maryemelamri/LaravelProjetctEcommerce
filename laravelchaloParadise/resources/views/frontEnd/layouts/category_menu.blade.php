<div class="side-bar" style="margin-left: 10px;">
        <?php
        $categories=DB::table('categories')->where([['status',1],['parent_id',0]])->get();
    ?>
    <div class="entete bg-info " style="padding:10px;background-color: #EC971F ; color: white; ">

    <a class="" > 
      <i class="fa fa-bars fa-lg "style="color: white;" ></i>  <span style="color: white;text-decoration: none;">Categories</span> 
      <i style=" float: right;color: white" class="fa fa-chevron-down"></i>
    </a>
    </div>
    @foreach($categories as $category)
    <?php
        $sub_categories=DB::table('categories')->select('id','name')->where([['parent_id',$category->id],['status',1]])->get();
    ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordian" href="#sportswear{{$category->id}}">
                    @if(count($sub_categories)>0)
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    @endif
                </a>
                    <a href="{{route('cats',$category->id)}}">{{$category->name}}</a>

            </h4>
        </div>
        @if(count($sub_categories)>0)
            <div id="sportswear{{$category->id}}" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        @foreach($sub_categories as $sub_category)
                            <li><a href="{{route('cats',$sub_category->id)}}">{{$sub_category->name}} </a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
    @endforeach
</div>


