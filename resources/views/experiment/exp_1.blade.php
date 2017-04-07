hello exp_1
{{ Form::open(array('url' => route('exp.create'), 'method' => 'get')) }}
<div class="col-xs-4">
    <input name="kode" type="text" placeholder="masukan kode exp2">
    <button type="submit">Access exp_2</button>
</div>
{{Form::close()}}
