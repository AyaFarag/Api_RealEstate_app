


 {{ csrf_field() }}

 <div class="col-md-12" >

<div class="row">
        <div class="col-md-6">
            <div class="form-group col-md-3">
                <label class="mr-sm-1" for="inlineFormCustomSelect">{{ trans('language.category name') }}</label>
                <select class="custom-select mr-sm-1" style="height:34px" id="inlineFormCustomSelect" name="category">
                   
                    @foreach ($category as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-body">
                                <label for="" class="">{{ trans('language.specialization name') }}</label>
                                <input id="" type="text" class=" form-control" name="specialization" value="{{$specialization->name}}"/>
                            </div>
                        </div>
                    </div>
                </div>   
          </div>
</div>

</div>

