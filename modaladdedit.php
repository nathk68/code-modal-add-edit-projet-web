<div id="modal_add_edit" class="modal">
            <div class="modal-content">
                <span class="close" id="close_add_edit">&times;</span>
                <div class="title_modal"></div>
                <form class="form_add_edit" method="POST" action="/controller/Manage_companies.php">
                    <input type="hidden" name="action" value="add">
                    <div class="table-container">
                        <div class="info_message"></div>
                        <div class="flex-table">
                            <div class="flex-row name">Nom :</div>
                            <div class="flex-row value"><input class="input" type="text" name="name" required></div>
                        </div>
                        <div class="flex-table">
                            <div class="flex-row name">Secteur d'activité :</div>
                            <div class="flex-row value"><input class="input" type="text" name="activity_sector" required></div>
                        </div>
                        <div class="flex-table">
                            <div class="flex-row name">Nb stagiaires CESI :</div>
                            <div class="flex-row value"><input class="input" type="text" name="nb_intern_cesi" required></div>
                        </div>
                        <div class="flex-table">
                            <div class="flex-row name">Email :</div>
                            <div class="flex-row value"><input class="input" type="text" name="email" required></div>
                        </div>
                        <div class="flex-table">
                            <div class="flex-row name">Confiance :</div>
                            <div class="flex-row value">
                                <select class="input" name="note" id="select_note" required>
                                    <option value="A">--Choisir une note--</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex-table">
                            <div class="flex-row name">Localisation :</div>
                            <div class="flex-row value">
                                <select class="input" name="localisation" id="select_localisation" required>
                                    <option value="">--Choisir une ville--</option>
                                    <?php foreach ($results_localisations as $result) { ?>
                                        <option value="<?= $result->ID_localisation ?>"><?= $result->city_localisation ?></option>
                                    <?php } ?>
                                </select>    
                            </div>
                        </div>
                        <div class="flex-table">
                            <div class="flex-row name">Visibilité :</div>
                            <div class="flex-row value">
                                <select class="input" name="visibility" id="select_visibility" required>
                                    <option value="A">--Choisir une visibilité--</option>
                                    <option value="O">Oui</option>
                                    <option value="N">Non</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button id="button_add_edit" type="submit">Ajouter</button>
                </form>
            </div>
        </div>