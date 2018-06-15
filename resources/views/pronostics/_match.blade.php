<tr>
  <td nowrap class="text-right">
    {{ $match->homeTeam->name }}
    <i class="{{'flag-icon flag-icon-'.$match->homeTeam->iso}}"></i>
  </td>
  <td><input type="text" name="" value="" size="1" class="form-control input-sm"></td>
  <td><input type="text" name="" value="" size="1" class="form-control input-sm"></td>
  <td nowrap>
    <i class="{{'flag-icon flag-icon-'.$match->awayTeam->iso}}"></i>
    {{ $match->awayTeam->name }}
  </td>
</tr>
