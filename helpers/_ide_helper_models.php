<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Affixe
 *
 * @property int $id
 * @property string $libelle
 * @property int $affixe_pre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Elevage|null $Elevage
 * @method static \Illuminate\Database\Eloquent\Builder|Affixe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Affixe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Affixe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Affixe whereAffixePre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affixe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affixe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affixe whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affixe whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperAffixe {}
}

namespace App{
/**
 * App\Allele
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $locus_id
 * @property string $nom
 * @property string $abbrev
 * @property int $is_default
 * @property int $is_dominant
 * @property-read \App\Locus $Locus
 * @method static \Illuminate\Database\Eloquent\Builder|Allele newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Allele newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Allele query()
 * @method static \Illuminate\Database\Eloquent\Builder|Allele whereAbbrev($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allele whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allele whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allele whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allele whereIsDominant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allele whereLocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allele whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Allele whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperAllele {}
}

namespace App{
/**
 * class Animal (table animaux)
 * Relations: Genotypes, Elevage, Race, RacesPossibles (table races_possible): when a choice between different studbooks is required, Affixe, Performance, Sire, Dam (parents, table animaux), StatutFemelle or StatutMale, Pathologie, Couleur, Image
 * Other attributes: nom, couleur (determinated by owner), taille_cm, taille_additive, sexe, prix, date_achat, date_naissance, statut_administratif, modele_allures_additifs, modele_allures, capacite_dressage_additive, capacite_dressage_additive, booleans a_vendre, fondateur, foetus
 * functions: Sexe (sex and statut for reproduction)
 * Genre: (male or female, for competition registration)
 * Progneny: born children (including miscarriages)
 * Palmares: competition results (from table resultats) where the animal is ranked
 * NomComplet (name + affix)
 * ageMonths: age given in months
 * ageYears: age given in years
 * ageAdministratif ($date): age given in years at a given date, as if the animal was born in january (for competition registration)
 * taille: current height at the current date, equal to taille_cm where horse is adult
 * checkNom: check if the name is not already taken (without affix or with same affix)
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $nom
 * @property int|null $affixe_id
 * @property string|null $couleur
 * @property string|null $base
 * @property int|null $taille_cm
 * @property int|null $race_id
 * @property string $sexe
 * @property string|null $date_achat
 * @property string|null $date_naissance
 * @property int $a_vendre
 * @property int|null $prix
 * @property int $elevage_id
 * @property int $fondateur
 * @property int $foetus
 * @property float $consang
 * @property int|null $sire_id
 * @property int|null $dam_id
 * @property int|null $modele_allures
 * @property int $modele_allures_additifs
 * @property int $capacite_apprentissage_additive
 * @property int $capacite_dressage_additive
 * @property int|null $taille_additive
 * @property string|null $notes
 * @property string $statut_administratif
 * @property-read \App\Affixe|null $Affixe
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Couleur> $Couleur
 * @property-read int|null $couleur_count
 * @property-read Animal|null $Dam
 * @property-read \App\Elevage $Elevage
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Evenement> $Evenements
 * @property-read int|null $evenements_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Image> $Image
 * @property-read int|null $image_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Pathologie> $Pathologie
 * @property-read int|null $pathologie_count
 * @property-read \App\Performance|null $Performance
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Phenotype> $Phenotype
 * @property-read int|null $phenotype_count
 * @property-read \App\Race|null $Race
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Race> $RacesPossibles
 * @property-read int|null $races_possibles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Resultat> $Resultats
 * @property-read int|null $resultats_count
 * @property-read Animal|null $Sire
 * @property-read \App\StatutFemelle|null $StatutFemelle
 * @property-read \App\StatutMale|null $StatutMale
 * @method static \Illuminate\Database\Eloquent\Builder|Animal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Animal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Animal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereAVendre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereAffixeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereBase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereCapaciteApprentissageAdditive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereCapaciteDressageAdditive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereConsang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereCouleur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereDamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereDateAchat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereDateNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereElevageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereFoetus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereFondateur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereModeleAllures($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereModeleAlluresAdditifs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereRaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereSexe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereSireId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereStatutAdministratif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereTailleAdditive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereTailleCm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperAnimal {}
}

namespace App{
/**
 * App\AssoCouleur
 *
 * @property int $id
 * @property int $couleur_res_id
 * @property int $couleur1_id
 * @property int $couleur2_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AssoCouleur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssoCouleur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssoCouleur query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssoCouleur whereCouleur1Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoCouleur whereCouleur2Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoCouleur whereCouleurResId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoCouleur whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoCouleur whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoCouleur whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperAssoCouleur {}
}

namespace App{
/**
 * App\AssoRace
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $race_pere_id
 * @property int|null $race_mere_id
 * @property int $race_produit_id
 * @property int $taille_conditions
 * @property int $automatique
 * @property string|null $commentaire
 * @property int $approbation
 * @property float|null $pourCentArabe
 * @property float|null $pourCentWelsh
 * @property float|null $pourCentLusitanien
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace whereApprobation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace whereAutomatique($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace whereCommentaire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace wherePourCentArabe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace wherePourCentLusitanien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace wherePourCentWelsh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace whereRaceMereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace whereRacePereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace whereRaceProduitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace whereTailleConditions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssoRace whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperAssoRace {}
}

namespace App{
/**
 * App\Budget
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $mois
 * @property int $elevage_id
 * @property int $solde_debut
 * @property int|null $solde_fin
 * @property int $veto_marechal
 * @property int $frais_administratifs
 * @property int $frais_nourriture
 * @property int $frais_engagements
 * @property int $frais_transports
 * @property int $achat_foncier
 * @property int $achat_animaux
 * @property int $achat_saillies
 * @property int $gains_concours
 * @property int $vente_saillies
 * @property int $vente_animaux
 * @property int $revenus_externes
 * @property-read \App\Elevage $Elevage
 * @method static \Illuminate\Database\Eloquent\Builder|Budget newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget query()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereAchatAnimaux($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereAchatFoncier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereAchatSaillies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereElevageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereFraisAdministratifs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereFraisEngagements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereFraisNourriture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereFraisTransports($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereGainsConcours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereMois($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereRevenusExternes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereSoldeDebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereSoldeFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereVenteAnimaux($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereVenteSaillies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereVetoMarechal($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperBudget {}
}

namespace App{
/**
 * App\Categorie
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property int|null $sexe
 * @property int|null $age_min
 * @property int|null $age_max
 * @property int|null $taille_min
 * @property int|null $taille_max
 * @property int|null $saillie
 * @property int|null $suitee
 * @property int|null $entier
 * @property int|null $autorise
 * @property int|null $approuve
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Competition> $Competitions
 * @property-read int|null $competitions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereAgeMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereAgeMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereApprouve($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereAutorise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereEntier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereSaillie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereSexe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereSuitee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereTailleMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereTailleMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorie whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperCategorie {}
}

namespace App{
/**
 * App\Competition
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property string $type
 * @property int $niveau_id
 * @property int $prix_inscription
 * @property int $prix_premier
 * @property int|null $tous_poneys_sport
 * @property int|null $tous_chevaux_sport
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Categorie> $Categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Evenement> $Evenements
 * @property-read int|null $evenements_count
 * @property-read \App\Niveau $Niveau
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Race> $Races
 * @property-read int|null $races_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Reprise> $Reprises
 * @property-read int|null $reprises_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Resultat> $Resultats
 * @property-read int|null $resultats_count
 * @method static \Illuminate\Database\Eloquent\Builder|Competition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Competition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Competition query()
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereNiveauId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition wherePrixInscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition wherePrixPremier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereTousChevauxSport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereTousPoneysSport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competition whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperCompetition {}
}

namespace App{
/**
 * App\Couleur
 *
 * @property int $id
 * @property string $nom
 * @property int|null $base_couleur
 * @property int|null $est_motif
 * @property int|null $est_dilution
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Animal> $Animal
 * @property-read int|null $animal_count
 * @property-read \App\AssoCouleur|null $Associee1
 * @property-read \App\AssoCouleur|null $Associee2
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Image> $Images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Phenotype> $Phenotype
 * @property-read int|null $phenotype_count
 * @method static \Illuminate\Database\Eloquent\Builder|Couleur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Couleur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Couleur query()
 * @method static \Illuminate\Database\Eloquent\Builder|Couleur whereBaseCouleur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couleur whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couleur whereEstDilution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couleur whereEstMotif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couleur whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couleur whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couleur whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperCouleur {}
}

namespace App{
/**
 * App\Debug
 *
 * @property int $id
 * @property string|null $evenement
 * @property string|null $competition
 * @property string|null $categorie
 * @property string|null $cheval
 * @property string|null $note
 * @property string|null $classement
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Debug newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Debug newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Debug query()
 * @method static \Illuminate\Database\Eloquent\Builder|Debug whereCategorie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Debug whereCheval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Debug whereClassement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Debug whereCompetition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Debug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Debug whereEvenement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Debug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Debug whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Debug whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperDebug {}
}

namespace App{
/**
 * App\Elevage
 *
 * @property int $id
 * @property int|null $affixe_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom_elevage
 * @property string $nom_eleveur
 * @property string $role
 * @property float $surface
 * @property float $foin
 * @property int $user_id
 * @property-read \App\Affixe|null $Affixe
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Animal> $Animaux
 * @property-read int|null $animaux_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Budget> $Budgets
 * @property-read int|null $budgets_count
 * @property-read \App\Image|null $Image
 * @property-read \App\User $User
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage whereAffixeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage whereFoin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage whereNomElevage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage whereNomEleveur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage whereSurface($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Elevage whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperElevage {}
}

namespace App{
/**
 * App\Evenement
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $date
 * @property string $nom
 * @property int $distance
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Competition> $Competitions
 * @property-read int|null $competitions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evenement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperEvenement {}
}

namespace App{
/**
 * App\Gamedata
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $budget
 * @property string $date_courante
 * @property string $date_debut
 * @property string $lettre
 * @property int $terres
 * @method static \Illuminate\Database\Eloquent\Builder|Gamedata newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamedata newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamedata query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamedata whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamedata whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamedata whereDateCourante($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamedata whereDateDebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamedata whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamedata whereLettre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamedata whereTerres($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamedata whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperGamedata {}
}

namespace App{
/**
 * App\Genome
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Genome newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genome newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genome query()
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperGenome {}
}

namespace App{
/**
 * App\Genotype
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $animal_id
 * @property int $allele_p_id
 * @property int $allele_m_id
 * @property int $locus_id
 * @property-read \App\Animal $Animal
 * @property-read \App\Locus|null $Locus
 * @method static \Illuminate\Database\Eloquent\Builder|Genotype newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genotype newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genotype query()
 * @method static \Illuminate\Database\Eloquent\Builder|Genotype whereAlleleMId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genotype whereAllelePId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genotype whereAnimalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genotype whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genotype whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genotype whereLocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genotype whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperGenotype {}
}

namespace App{
/**
 * App\Image
 *
 * @property int $id
 * @property string $chemin
 * @property string $extension
 * @property int $z_index
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Animal> $Animal
 * @property-read int|null $animal_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Couleur> $Couleur
 * @property-read int|null $couleur_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Elevage> $Elevage
 * @property-read int|null $elevage_count
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereChemin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereZIndex($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperImage {}
}

namespace App{
/**
 * App\Locus
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $espece_id
 * @property string $nom
 * @property string $abbrev
 * @property string|null $chromosome
 * @property int $linked
 * @property int $obligatoire
 * @property int|null $next_linked_id
 * @property int|null $prev_linked_id
 * @property int|null $taux_recomb_next
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Allele> $Allele
 * @property-read int|null $allele_count
 * @property-read Locus|null $NextLocus
 * @property-read Locus|null $PrevLocus
 * @method static \Illuminate\Database\Eloquent\Builder|Locus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Locus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Locus query()
 * @method static \Illuminate\Database\Eloquent\Builder|Locus whereAbbrev($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locus whereChromosome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locus whereEspeceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locus whereLinked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locus whereNextLinkedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locus whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locus whereObligatoire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locus wherePrevLinkedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locus whereTauxRecombNext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Locus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperLocus {}
}

namespace App{
/**
 * App\Niveau
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $libelle
 * @property int $open_before
 * @property int $open_after
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Animal> $Animal
 * @property-read int|null $animal_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Competition> $Competition
 * @property-read int|null $competition_count
 * @method static \Illuminate\Database\Eloquent\Builder|Niveau newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Niveau newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Niveau query()
 * @method static \Illuminate\Database\Eloquent\Builder|Niveau whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Niveau whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Niveau whereLibelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Niveau whereOpenAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Niveau whereOpenBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Niveau whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperNiveau {}
}

namespace App{
/**
 * App\Pathologie
 *
 * @property int $id
 * @property string $nom
 * @property string|null $description
 * @property int $letal
 * @property int $letal_foetus
 * @property int $redhibitoire
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Animal> $Animal
 * @property-read int|null $animal_count
 * @method static \Illuminate\Database\Eloquent\Builder|Pathologie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pathologie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pathologie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pathologie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pathologie whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pathologie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pathologie whereLetal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pathologie whereLetalFoetus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pathologie whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pathologie whereRedhibitoire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pathologie whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperPathologie {}
}

namespace App{
/**
 * App\Performance
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $sante
 * @property int $animal_id
 * @property int $niveau_id
 * @property int $niveau_dressage
 * @property int $pourcent_niveau
 * @property int|null $label_dressage
 * @property float|null $IDR_cheval
 * @property float|null $IDR_poney
 * @property-read \App\Animal $Animal
 * @property-read \App\Niveau $Niveau
 * @method static \Illuminate\Database\Eloquent\Builder|Performance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Performance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Performance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Performance whereAnimalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Performance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Performance whereIDRCheval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Performance whereIDRPoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Performance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Performance whereLabelDressage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Performance whereNiveauDressage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Performance whereNiveauId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Performance wherePourcentNiveau($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Performance whereSante($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Performance whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperPerformance {}
}

namespace App{
/**
 * App\Phenotype
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $allele1_id
 * @property int $allele2_id
 * @property int|null $effet_taille
 * @property int|null $effet_blanc
 * @property int|null $effet_m_a
 * @property int|null $effet_rouge
 * @property int|null $effet_noir
 * @property int|null $effet_noir_extremites
 * @property int|null $couleur_id
 * @property int|null $pathologie_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Animal> $Animal
 * @property-read int|null $animal_count
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype query()
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereAllele1Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereAllele2Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereCouleurId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereEffetBlanc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereEffetMA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereEffetNoir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereEffetNoirExtremites($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereEffetRouge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereEffetTaille($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype wherePathologieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phenotype whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperPhenotype {}
}

namespace App{
/**
 * App\Race
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property int $prix_moyen
 * @property int|null $frais_enregistrement
 * @property int|null $taille_min
 * @property int|null $taille_max
 * @property int $approbation
 * @property int $approbation_provisoire
 * @property int $approbation_classes
 * @property float|null $pcArabe
 * @property float|null $pcWelsh
 * @property int $age_repro_male
 * @property int $age_repro_femelle
 * @property int $poney_sport
 * @property int $cheval_sport
 * @property int|null $confirmation_juments
 * @property float|null $pclusitanien
 * @property int|null $croisement
 * @property string|null $fonction_inscription
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Animal> $Animaux
 * @property-read int|null $animaux_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\AssoRace> $AssoRace
 * @property-read int|null $asso_race_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Competition> $Competitions
 * @property-read int|null $competitions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Race newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Race newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Race query()
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereAgeReproFemelle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereAgeReproMale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereApprobation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereApprobationClasses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereApprobationProvisoire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereChevalSport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereConfirmationJuments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereCroisement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereFonctionInscription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereFraisEnregistrement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race wherePcArabe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race wherePcWelsh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race wherePclusitanien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race wherePoneySport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race wherePrixMoyen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereTailleMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereTailleMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Race whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperRace {}
}

namespace App{
/**
 * App\RacesPossibles
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $animal_id
 * @property int $race_id
 * @method static \Illuminate\Database\Eloquent\Builder|RacesPossibles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RacesPossibles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RacesPossibles query()
 * @method static \Illuminate\Database\Eloquent\Builder|RacesPossibles whereAnimalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RacesPossibles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RacesPossibles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RacesPossibles whereRaceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RacesPossibles whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperRacesPossibles {}
}

namespace App{
/**
 * App\Rendement
 *
 * @property int $id
 * @property string $mois
 * @property float $ha_par_UGB
 * @property float $foin_tMS_ha
 * @method static \Illuminate\Database\Eloquent\Builder|Rendement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rendement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rendement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rendement whereFoinTMSHa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rendement whereHaParUGB($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rendement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rendement whereMois($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperRendement {}
}

namespace App{
/**
 * App\Reprise
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property string $categorie
 * @property string $niveau
 * @property int $taille_min_cm
 * @property int $taille_max_cm
 * @property int $age_min_administratif
 * @property int $niveau_num_global
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Competition> $Competitions
 * @property-read int|null $competitions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise whereAgeMinAdministratif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise whereCategorie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise whereNiveau($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise whereNiveauNumGlobal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise whereTailleMaxCm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise whereTailleMinCm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reprise whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperReprise {}
}

namespace App{
/**
 * App\Resultat
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $evenement_id
 * @property int $animal_id
 * @property int $categorie_id
 * @property int $competition_id
 * @property int|null $classement
 * @property int|null $note_modele
 * @property int|null $note_allures
 * @property float|null $note_synthese
 * @property int|null $reprise_id
 * @property-read \App\Animal $Animal
 * @property-read \App\Categorie $Categorie
 * @property-read \App\Competition $Competition
 * @property-read \App\Evenement $Evenement
 * @property-read \App\Reprise|null $Reprise
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereAnimalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereCategorieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereClassement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereCompetitionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereEvenementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereNoteAllures($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereNoteModele($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereNoteSynthese($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereRepriseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Resultat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperResultat {}
}

namespace App{
/**
 * App\StatutFemelle
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $animal_id
 * @property int $fertilite
 * @property int $pres_pleine
 * @property int $conf_pleine
 * @property int $suitee
 * @property int $vide
 * @property int $conf_vide
 * @property int|null $etalon_id
 * @property string|null $terme
 * @property string|null $date_saillie
 * @property int|null $confirmee
 * @property int|null $labellisee_dressage
 * @property int|null $labellisee_SF
 * @property-read \App\Animal|null $Femelle
 * @property-read \App\Animal|null $Male
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereAnimalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereConfPleine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereConfVide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereConfirmee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereDateSaillie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereEtalonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereFertilite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereLabelliseeDressage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereLabelliseeSF($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle wherePresPleine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereSuitee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereTerme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutFemelle whereVide($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperStatutFemelle {}
}

namespace App{
/**
 * App\StatutMale
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $disponible
 * @property int $modele15
 * @property int $classeNat
 * @property int $autorisationSanitaire
 * @property string $qualite
 * @property string $approuvePFS
 * @property int $fertilite
 * @property int $animal_id
 * @property int|null $prix
 * @property int $carnet_saillies
 * @property int|null $labellise_dressage
 * @property-read \App\Animal $male
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereAnimalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereApprouvePFS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereAutorisationSanitaire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereCarnetSaillies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereClasseNat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereDisponible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereFertilite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereLabelliseDressage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereModele15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereQualite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatutMale whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperStatutMale {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Elevage> $Elevage
 * @property-read int|null $elevage_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

