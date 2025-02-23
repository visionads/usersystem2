<div class="modal-header">
    <a href="{{ URL::previous() }}" class="close" type="button" title="click x button for close this entry form"> × </a>
    <h4 class="modal-title" id="myModalLabel">{{$pageTitle}}</h4>
</div>

<div class="modal-body">
    <div style="padding: 30px;">
        <table id="" class="table table-bordered table-hover table-striped">
            <tr>
                <th class="col-lg-4">Title</th>
                <td>{{ isset($data->title)?ucfirst($data->title):''}}</td>
            </tr>
            <tr>
                <th class="col-lg-4">Description</th>
                <td>{{ isset($data->description)?$data->description:''}}</td>
            </tr>
            <tr>
                <th class="col-lg-4">Weight</th>
                <td>
                    @if($data->weight == 1) User and Above
                    @elseif($data->weight == 2) Company Admin and Above
                    @elseif($data->weight == 3) Admin and Above
                    @elseif($data->weight == 4) Super Admin
                    @endif
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="modal-footer">
    <a href="{{route('index-permission')}}" class="btn btn-default" type="button" data-placement="top" data-content="click close button for close this entry form"> Close </a>
</div>


<script>
    $(".btn").popover({ trigger: "manual" , html: true, animation:false})
            .on("mouseenter", function () {
                var _this = this;
                $(this).popover("show");
                $(".popover").on("mouseleave", function () {
                    $(_this).popover('hide');
                });
            }).on("mouseleave", function () {
                var _this = this;
                setTimeout(function () {
                    if (!$(".popover:hover").length) {
                        $(_this).popover("hide");
                    }
                }, 300);
            });
</script>

