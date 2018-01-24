<label for="">Код ошибки</label>
<input type="text" class="form-control" name="error_code" placeholder="Введите код ошибки"
       value="{{$error->error_code or ""}}" required>
<label for="">Описание ошибки</label>
<textarea type="text" class="form-control" name="description" placeholder="Введите описание кода ошибки"
       value="{{$error->description or ""}}" required></textarea>
<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">