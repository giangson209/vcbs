<?php $id = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
    <td class="hd1">{{ $index }}</td>
    <td>
        <div class="image">
            <div class="image__thumbnail">
                <img src="{{ !empty($value->image) ?  $value->image : __IMAGE_DEFAULT__ }}"
                     data-init="{{ __IMAGE_DEFAULT__ }}">
                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
                    <i class="fa fa-times"></i></a>
                <input type="hidden" value="{{ @$value->image }}" name="content[hd1][{{ $id }}][image]"  />
                <div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
            </div>
        </div>                                
    </td>
    <td>
        <div class="form-group">
            <textarea name="content[hd1][{{$id}}][content]" id="contentRP{{ $id }}" cols="30" rows="10">{!! @$value->content !!}</textarea>
        </div>
    </td>
    <td style="text-align: center;">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>
<script>
    CKEDITOR.replace( 'contentRP{{ $id }}' );
</script>