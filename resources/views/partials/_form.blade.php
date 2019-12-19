<input type="hidden" name="id" class="form-control" readonly="true" value="{{$events->id}}">
<label for="titre" class="control-label">titre</label>
<input type="text" name="titre" class="form-control" required="titre" value="{{$events->titre}}">
<label for="description" class="control-label">description</label>
<textarea type="text" name="description" class="form-control" rows="5" required="description">{{$events->description}}</textarea></br>

<input type="submit" class="btn btn-primary btn btn-block" value="{{ $submitEvenement }}">