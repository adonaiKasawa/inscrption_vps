  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="card card-info">
    <div class="card-header">
      <h5 class="card-title">FORMULAIRE POUR LES INSCRIPTION </h5>
    </div>
    <div class="col-10 offset-1"></div>
    <div class="card-body">
      <form method="POST" id="quickForm">
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label for="">Nom</label>
              <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom ">
            </div>
          </div>
          <div class="col-sm-4">
            <label for="">Post-Nom</label>
            <div class="form-group">
              <input type="text" id="postnom" name="postnom" class="form-control" placeholder="Post-Nom">
            </div>
          </div>
          <div class="col-sm-4">
            <label for="">Prenom</label>
            <div class="form-group">
              <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prenom etudiant(e).....">
            </div>
          </div>
          <div class="col-sm-4">
            <label for="">Lieu de naissance</label>
            <div class="form-group">
              <input type="text" name="lieu_naissance" id="lieu_naissance" class="form-control" placeholder="lieu de naissance">
            </div>
          </div>
          <div class="col-sm-4">
            <label for="">Date de naissance</label>
            <div class="form-group">
              <input type="date" name="date_naissance" id="date_naissance" class="form-control" placeholder=".....">
            </div>
          </div>
          <div class="col-sm-4">
            <label for="">Sexe</label>
            <div class="form-group">
              <select id="sexe" class="form-control" name="sexe">
                <option value="">selectionner</option>
                <option value="Masculin">Masculin</option>
                <option value="Feminin">Feminin</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
            <label for="">Etat civil</label>
            <div class="form-group">
              <select id="etat" class="form-control" name="etat">
                <option value="">selectionner</option>
                <option value="Masculin">celibataire</option>
                <option value="Feminin">marie(e)s</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nationalite</label>
              <input type="text" class="form-control" name="nationnalite" id="nationnalite"  placeholder="Nationnalite">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Contact</label>
              <input type="text" class="form-control" name="telephone" id="telephone" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="" placeholder="+243..." inputmode="text">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Adresse physique</label>
              <input type="text" class="form-control" name="adresse" id="adresse" placeholder="adresse etudiant(e)...">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nom du pere</label>
              <input type="text" class="form-control" name="nom_pere" id="nom_pere" placeholder="Nom du pere...">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nom de la mere</label>
              <input type="text" class="form-control" name="nom_mere" id="nom_mere" placeholder="Nom de la mere...">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Province d'origine</label>
              <input type="text" class="form-control" name="province_origine" id="province_origine" placeholder="province etudiant..." >
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>District d'origine</label>
              <input type="text" class="form-control" name="district_origine" id="district_origine" placeholder="District origine...">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Territoire d'origine</label>
              <input type="text" class="form-control" name="territoire_origine" id="territoire_origine" placeholder="Territoire origine...">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nom de l'ecole</label>
              <input type="text" class="form-control" name="nom_ecole" id="nom_ecole" placeholder="Nom de l'ecole...">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Adresse ecole</label>
              <input type="text" class="form-control" name="adresse_ecole" id="adresse_ecole" placeholder="Adresse ecole de provenance">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Annee obtention diplome</label>
              <input type="text" class="form-control" name="annee_obtention_diplome" id="annees_obtention_diplome"  placeholder="Annee de l'obtention du diplome">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Section suivie aux humanites</label>
              <input type="text" class="form-control" name="section_suivie_humanite" id="section_suivie_humanite"  placeholder="section humanite">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">                                                                    
              <label>Pourcentage obtenu</label>
              <input type="text" class="form-control" name="pourcentage_obtenu" id="pourcentage_obtenu"  placeholder="60%...">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="ispgombe@gmail.com">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 offset-3">
            <label>Système</label>
            <div class="form-group">
              <select id="systeme" class="form-control" name="systeme">
                <option value="null">Sélectionnez un système </option>
                <option value="as">Anciens système</option>
                <option value="LMD">LMD</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-4">
            <label>Departement</label>
            <div class='form-group'>
              <select class='form-control getAllDepartement' name='departement' id='departement'>
              <option value='null'>Sélectionnez un departement</option>
              </select>
            </div>
          </div>
          <div class="col-4">
            <label>Vacation</label>
            <div class="form-group">
              <select id="vacation" class="form-control" name="vacation">
                <option value="null">Sélectionnez une vacation</option>
                <option value="jour">Jour</option>
                <option value="soir">Soir</option>
              </select>
            </div>
          </div>
          <div class="col-4 getAllPromotionByDepartement">
            <label>Promotion</label>
            <div class="form-group">
              <select id="promotion" class="form-control" name="promotion">
                <option value="null">Sélectionnez une promotion</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div id="glo">
              <div class="form-check" id="diplome_etat">
                <input class="form-check-input" id="diplome_etat" name="r1" type="checkbox">
                <label class="form-check-label">Diplome D'etat</label>
              </div>
              <div class="form-check" id="attest_etat">
                <input class="form-check-input" type="checkbox" id="attest_etat" name="r1">
                <label class="form-check-label">Attestation de reussite</label>
              </div>
              <div class="form-check" id="vie_et_moeurs">
                <input class="form-check-input" type="checkbox" id="vie_et_moeurs" name="r1">
                <label class="form-check-label">Vie et Moeurs</label>
              </div>
              <div class="form-check" id="releve_g1">
                <input class="form-check-input" type="checkbox"  id="releve_g1" name="r1">
                <label class="form-check-label">Releve G1</label>
              </div>
              <div class="form-check" id="diplome_g3">
                <input class="form-check-input" type="checkbox" id="diplome_g3" name="r1">
                <label class="form-check-label">Diplome G3</label>
              </div>
              <div class="form-check" id="releve_g3">
                <input class="form-check-input" type="checkbox" id="releve_g3" name="r1">
                <label class="form-check-label">Releve G3</label>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" name="button" id="button" class="btn btn-primary view_data">VALIDER ISCRIPTION</button>
        </div>
      </form>
    </div>
  </div>
</div>