<tbody>
                        <tr>
                          <td>Picture</td>
                          <td><input type="file" name="pic" value="<?= $detail['pic'] ?>"  /></td>
                        </tr>
                        <tr>
                          <td>Name</td>
                          <td><input class="form-control" type="text" name="names" value="<?= isset($detail['names']) ? $detail['names'] : '' ?>" />
                          </td>
                        </tr>
                        <tr>
                          <td>details</td>
                          <td><input class="form-control" type="text" name="details" value="<?= isset($detail['details']) ? $detail['details'] : '' ?>" />
                          </td>
                        </tr>
                        <tr>
                          <td>Prices</td>
                          <td><input class="form-control" type="number" name="prices" value="<?= $detail['prices'] ?>" /></td>
                        </tr>
                        <tr>
                          <td>Date</td>
                          <td>
                            <input class="form-control" type="date" name="date" value="<?= $detail['date'] ?>" />
                          </td>
                        </tr>
                        <tr>
                            <td>Activity</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-purple dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Activities
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act1" value="act A" <?= isset($detail['act']) && in_array('act A', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act1">Any</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act2" value="act B" <?= isset($detail['act']) && in_array('act B', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act2">City act</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act3" value="act C" <?= isset($detail['act']) && in_array('act C', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act3">Cultural</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act4" value="act D" <?= isset($detail['act']) && in_array('act D', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act4">Thematic acts</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act5" value="act E" <?= isset($detail['act']) && in_array('act E', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act5">Family Friendly</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act6" value="act F" <?= isset($detail['act']) && in_array('act F', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act6">Outdoors Activity</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="act[]" id="act7" value="act G" <?= isset($detail['act']) && in_array('act G', $detail['act']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="act7">Adventure acts</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Destination</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-purple dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Destinations
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest1" value="" <?= isset($detail['destination']) && in_array('', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest1">Any</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest2" value="canggu" <?= isset($detail['destination']) && in_array('canggu', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest2">Canggu</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest3" value="jimbaran" <?= isset($detail['destination']) && in_array('jimbaran', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest3">Jimbaran</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest4" value="kuta" <?= isset($detail['destination']) && in_array('kuta', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest4">Kuta</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest5" value="nusa-dua" <?= isset($detail['destination']) && in_array('nusa-dua', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest5">Nusa Dua</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest6" value="seminyak" <?= isset($detail['destination']) && in_array('seminyak', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest6">Seminyak</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest7" value="tanah-lot" <?= isset($detail['destination']) && in_array('tanah-lot', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest7">Tanah Lot</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="destination[]" id="dest8" value="ubud" <?= isset($detail['destination']) && in_array('ubud', $detail['destination']) ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="dest8">Ubud</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Duration</td>
                            <td>
                                <select name="duration" class="form-select">
                                    <option value="01">Any</option>
                                    <option value="1">0-1 Hours</option>
                                    <option value="2">3-5 Hours</option>
                                    <option value="3">5-7 Hours</option>
                                    <option value="4">1 Day (7+ Hours)</option>
                                    <option value="5">2 Days</option>
                                    <option value="6">3 Days</option>
                                    <option value="8">4 Days</option>
                                    <option value="9">5+ Days</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                          <td>details</td>
                          <td>
                            <textarea class="form-control ckeditor" name="details" value="<?= $detail['details'] ?>"></textarea>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2" style="border: none;">
                              <button type="submit" class="btn btn-primary">Save</button>
                          </td>
                        </tr>
                      </tbody>