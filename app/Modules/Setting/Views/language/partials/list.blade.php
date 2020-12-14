<div class="x_panel">
    <div class="x_title px-0">
        <h5 class="mb-0">{{ __('Danh sách')}}</h5>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        @if (count($items) > 0)
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th width="43"><input type="checkbox" name="checkbox" id="checkbox" onclick="checkedAll();"></th>
                    <th>{{ __('Hình ảnh') }}</th>
                    <th>{{ __('Ngôn ngữ') }}</th>
                    <th>{{ __('Mã định danh') }}</th>
                    <th>{{ __('Trạng thái') }}</th>
                    <th>{{ __('Hành động') }}</th>
                    <th width="25">{{ __('ID') }}</th>
                </tr>
            </thead>
        </table>
        @else
        @include('backend.templates.list_empty')
         @endif
    </div>
    </div>
</div>