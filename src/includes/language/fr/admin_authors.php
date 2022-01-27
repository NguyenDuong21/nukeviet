<?php

/**
 * NUKEVIET Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$lang_translator['author'] = 'Phạm Chí Quang';
$lang_translator['createdate'] = '21/6/2010, 19:30';
$lang_translator['copyright'] = '@Copyright (C) 2010 VINADES.,JSC. Tous droits réservés.';
$lang_translator['info'] = 'Langue française pour NukeViet 4';
$lang_translator['langtype'] = 'lang_module';

$lang_module['is_suspend0'] = 'Actif';
$lang_module['is_suspend1'] = 'Suspendu au &ldquo;%1$s&rdquo; par &ldquo;<a href="%4$s">%2$s</a>&rdquo; en raison &ldquo;%3$s&rdquo;';
$lang_module['is_suspend2'] = 'Est suspendu';
$lang_module['last_login0'] = 'Jamais';
$lang_module['login'] = 'Identifiant';
$lang_module['full_name'] = 'Nom complet';
$lang_module['name'] = 'Nom du site Web';
$lang_module['sig'] = 'Signature';
$lang_module['editor'] = 'Éditeur';
$lang_module['lev'] = 'Droit';
$lang_module['position'] = 'Fonction';
$lang_module['regtime'] = 'Date de participation';
$lang_module['is_suspend'] = 'Status actuel';
$lang_module['last_login'] = 'Dernière session';
$lang_module['last_ip'] = 'Par IP';
$lang_module['browser'] = 'Navigateur';
$lang_module['os'] = 'Système d\'exploitation';
$lang_module['admin_info_title1'] = 'Infos du compte: %s';
$lang_module['admin_info_title2'] = 'Infos du compte: %s (c\'est vous)';
$lang_module['menulist'] = 'Administrateurs';
$lang_module['menuadd'] = 'Ajouter un Administrateur';
$lang_module['main'] = 'Liste des Administrateurs';
$lang_module['nv_admin_edit'] = 'Mofifier les infos de l\'administrateur';
$lang_module['nv_admin_add'] = 'Ajouter l\'administrateur';
$lang_module['nv_admin_del'] = 'Supprimer l\'administrateur';
$lang_module['username_noactive'] = 'Erreur: compte: %s n\'est pas encore activé, vous devez activer votre compte avant de l\'ajouter dans la gestion du site';
$lang_module['full_name_incorrect'] = 'Vous n\'avez pas encore entré le nom de cet administateur';
$lang_module['position_incorrect'] = 'Vous n\'avez pas encore entré la fonction de cet administateur';
$lang_module['nv_admin_add_info'] = 'Pour créer un nouveau compte d\'administration, remplissez tous les champs ci-dessous. Vous ne pouvez créer qu\'un administrateur inférieur de votre privilège';
$lang_module['if_level3_selected'] = 'Cochez les modules à gérer';
$lang_module['login_info'] = 'Vous devez entrer le nom d\'utilisateur, s\'il n\'y a pas d\'utilisateur, vous devez créer un utilisateur d\'abord.';
$lang_module['nv_admin_add_result'] = 'Infos du nouveau administrateur';
$lang_module['nv_admin_add_title'] = 'Le système a été créé un nouveau compte d\'administration avec les infos ci-dessous';
$lang_module['nv_admin_modules'] = 'Gestion de module';
$lang_module['admin_account_info'] = 'Information de l\'administrateur %s';
$lang_module['nv_admin_add_download'] = 'Télécharger';
$lang_module['nv_admin_add_sendmail'] = 'Envoyer la notification';
$lang_module['nv_admin_login_address'] = 'Lien vers la section d\'administration';
$lang_module['nv_admin_edit_info'] = 'Modifier les infos du compte &ldquo;<strong>%s</strong>&rdquo;';
$lang_module['show_mail'] = 'Afficher l\'e-mail';
$lang_module['sig_info'] = 'Cette signature sera insérée à la fin de chaque réponse, e-mail... envoyé par l\'administrateur &ldquo;<strong>%s</strong>&rdquo;. Utilisez le texte brut sans mise en forme';
$lang_module['not_use'] = 'non utilisé';
$lang_module['nv_admin_edit_result'] = 'Changer les infos de l\'administrateur: %s';
$lang_module['nv_admin_edit_result_title'] = 'Les changements effectués pour le compte de l\'administrateur %s';
$lang_module['show_mail0'] = 'Masquer';
$lang_module['show_mail1'] = 'Montrer';
$lang_module['field'] = 'Domaine';
$lang_module['old_value'] = 'Ancien';
$lang_module['new_value'] = 'Nouveau';
$lang_module['chg_is_suspend0'] = 'Le status actuel: suspendu. Pour Rétablir l\'activité de cet administrateur, Remplissez les champs ci-dessous';
$lang_module['chg_is_suspend1'] = 'Le status actuel: actif. Pour suspendre l\'activité de cet administrateur, remplissez les champs ci-dessous';
$lang_module['chg_is_suspend2'] = 'Activer/Suspendre';
$lang_module['nv_admin_chg_suspend'] = 'Changer le status d\'activité de l\'administrateur &ldquo;<strong>%s</strong>&rdquo;';
$lang_module['position_info'] = 'Le titre de Fonction est utilisé dans la communication des e-mails, des commentaires...';
$lang_module['susp_reason_empty'] = 'Vous n\'avez pas donné la raison de la suspension de l\'administrateur &ldquo;<strong>%s</strong>&rdquo;';
$lang_module['suspend_info_empty'] = 'Cet administrateur &ldquo;<strong>%s</strong>&rdquo; n\'est jamais suspendu';
$lang_module['suspend_info_yes'] = 'La liste des suspensions d\'activité &ldquo;<strong>%s</strong>&rdquo;';
$lang_module['suspend_start'] = 'Commencer';
$lang_module['suspend_end'] = 'Terminer';
$lang_module['suspend_reason'] = 'Raison de suspension';
$lang_module['suspend_info'] = 'À: %1$s<br />Par: %2$s';
$lang_module['suspend0'] = 'Rétablir l\'activité';
$lang_module['suspend1'] = 'Suspendre l\'activité';
$lang_module['clean_history'] = 'Supprimer l\'historique';
$lang_module['suspend_sendmail'] = 'Envoyer la notification';
$lang_module['delete_sendmail_info'] = 'Êtes vous sûr de vouloir supprimer le compte d\'administration &ldquo;<strong>%s</strong>&rdquo;? Remplissez les infos aux champs ci-dessous pour confirmer cette opération';
$lang_module['admin_del_sendmail'] = 'Envoyer la notification';
$lang_module['admin_del_reason'] = 'Raison de la suppression';
$lang_module['allow_files_type'] = 'Les types de fichiers authorisés';
$lang_module['allow_modify_files'] = 'Authoriser la modification, la suppression des fichiers';
$lang_module['allow_create_subdirectories'] = 'Authoriser la création des fichiers';
$lang_module['allow_modify_subdirectories'] = 'Authoriser la modification, la suppression des répertoires';
$lang_module['admin_login_incorrect'] = 'Le compte &ldquo;<strong>%s</strong>&rdquo; a été utilisé. Veuillez utiliser un autre nom';
$lang_module['config'] = 'Configuration';
$lang_module['funcs'] = 'Fonctionalités';
$lang_module['checkall'] = 'Sélectionner tout';
$lang_module['uncheckall'] = 'Désélectionner tout';
$lang_module['value_copied'] = 'Copié';
$lang_module['adminip'] = 'Gestion de IP connecté à l\'administration';
$lang_module['adminip_ip'] = 'IP';
$lang_module['adminip_timeban'] = 'Commencer';
$lang_module['adminip_timeendban'] = 'Terminer';
$lang_module['adminip_add'] = 'Ajouter IP';
$lang_module['adminip_address'] = 'Adresse';
$lang_module['adminip_begintime'] = 'Commencer';
$lang_module['adminip_endtime'] = 'Terminer';
$lang_module['adminip_notice'] = 'Note';
$lang_module['save'] = 'Sauver';
$lang_module['adminip_mask_select'] = 'Sélectionner';
$lang_module['adminip_nolimit'] = 'Perpétuel';
$lang_module['adminip_del_success'] = 'Suppression avec succès!';
$lang_module['adminip_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer cet IP de la liste?';
$lang_module['adminip_mask'] = 'Masque IP';
$lang_module['adminip_edit'] = 'Éditer';
$lang_module['adminip_delete'] = 'Supprimer';
$lang_module['adminip_error_ip'] = 'Saisissez IP autorisé de connecter à l\'administration';
$lang_module['adminip_error_validip'] = 'Erreur: IP invalide';
$lang_module['adminip_note'] = 'Attention: si vous activez le contrôle de IP, vous devez connaitre la structure des adresses IP: un IP se compose de 4 nombres sous forme A.B.C.D. Si tous ces nombres sont constants, sélectionnez le Masque 255.255.255.255. Si A, B  et C sont invariables, il faut choisir 255.255.255.xxx etc...';
$lang_module['title_username'] = 'Gestion de compte Parefeu de l\'Administration';
$lang_module['admfirewall'] = 'Contrôler le Parefeu de l\'Administration';
$lang_module['block_admin_ip'] = 'Vérifier IP lors de la connexion de l\'Administration';
$lang_module['username_add'] = 'Ajouter un compte';
$lang_module['username_edit'] = 'Éditer';
$lang_module['nicknam_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer ce compte de la liste?';
$lang_module['passwordsincorrect'] = 'Vous avez entré 2 mot de passe différents';
$lang_module['nochangepass'] = 'Laisser vide 2 champs de mot de passe si vous ne voulez pas changer le mot de passe';
$lang_module['rule_user'] = 'Utiliser uniquement les caractères a-zA-Z0-9_- pour le compte';
$lang_module['rule_pass'] = 'Utiliser uniquement les caractères a-zA-Z0-9_- pour le mot de passe';
$lang_module['spadmin_add_admin'] = 'Autoriser l\'administrateur général de changer les droits des administrateurs de module';
$lang_module['authors_detail_main'] = 'Afficher les détails du compte de l\'administrateur';
$lang_module['admin_check_pass_time'] = 'Le temps pour vérifier le mot de passe si l\'admin n\'utilise pas navigateur';
$lang_module['add_user'] = 'Désigner un utilisateur';
$lang_module['add_select'] = 'Sélectionner';
$lang_module['add_error_choose'] = 'Erreur: Vous n\'avez pas désigné un utilisateur pour l\'administrateur';
$lang_module['add_error_exist'] = 'Erreur: cet utilisateur est un administrateur';
$lang_module['add_error_notexist'] = 'Erreur: cet utilisateur n\'existe pas';
$lang_module['add_error_diff'] = 'Une erreur indéfinie est survenue';
$lang_module['action_account'] = 'Compte d\'utilisateur';
$lang_module['action_account_nochange'] = 'Réserver compte d\'utilisateur';
$lang_module['action_account_suspend'] = 'Suspendre compte d\'utilisateur';
$lang_module['action_account_del'] = 'Supprimer le compte d\'utilisateur';
$lang_module['module_admin'] = 'Droit du module du système';
$lang_module['users'] = 'Compte';
$lang_module['number'] = 'Numéro';
$lang_module['module'] = 'Nom du module';
$lang_module['custom_title'] = 'Titre';
$lang_module['main_module'] = 'Module de la page principale';
$lang_module['themeadmin'] = 'Thème de l\'Administration';
$lang_module['theme_default'] = 'Défaut';
$lang_module['2step_manager'] = 'Gestion de la vérification en deux étapes';
$lang_module['2step_code_off'] = 'La vérification en deux étapes via l\'application est désactivée';
$lang_module['2step_code_on'] = 'La vérification en deux étapes via l\'application est activée';
$lang_module['2step_oauth'] = 'Vérification en deux étapes avec Oauth';
$lang_module['2step_oauth_gate'] = 'Serveur Oauth';
$lang_module['2step_oauth_email'] = 'Email';
$lang_module['2step_oauth_empty'] = 'Pas encore de comptes de vérification';
$lang_module['2step_add_google'] = 'Ajouter un compte Google';
$lang_module['2step_add_facebook'] = 'Ajouter un compte Facebook';
$lang_module['2step_delete_all'] = 'Enlever tout';
$lang_module['2step_error_oauth_exists'] = 'Ce compte est déjà dans la liste de vérification';
$lang_module['2step_addtime'] = 'Ajouter du temps';
$lang_module['api_addtime'] = 'Créé à';
$lang_module['api_edittime'] = 'Mis à jour à';
$lang_module['api_roles'] = 'Gérer l\'API des rôles';
$lang_module['api_roles_list'] = 'Liste des rôles de l\'API';
$lang_module['api_roles_empty'] = 'Aucun rôle d\'API n\'a encore été ajouté. Veuillez compléter le formulaire ci-dessous pour ajouter le nouveau rôle de l\'API';
$lang_module['api_roles_add'] = 'Créer un nouveau rôle API';
$lang_module['api_roles_edit'] = 'Modifier le rôle de l\'API';
$lang_module['api_roles_title'] = 'Nom de rôle de l\'API';
$lang_module['api_roles_description'] = 'Rôle de description d\'API';
$lang_module['api_roles_allowed'] = 'API autorisées à accéder';
$lang_module['api_roles_error_title'] = 'Erreur: le nom du rôle de l\'API n\'a pas été entré';
$lang_module['api_roles_error_exists'] = 'Erreur: Ce nom de rôle d\'API existe déjà. Veuillez entrer un nom différent pour éviter toute confusion.';
$lang_module['api_roles_error_role'] = 'Erreur: Aucune API sélectionnée';
$lang_module['api_roles_checkall'] = 'Sélectionner tout';
$lang_module['api_roles_uncheckall'] = 'Décocher tout';
$lang_module['api_roles_detail'] = 'Détails des API';
$lang_module['api_role_notice'] = 'Remarque: Selon le niveau du compte d\'administrateur sous licence, les API utilisées dans chaque API de rôle seront redéfinies.';
$lang_module['api_role_notice_lang'] = 'Les API système sont valides pour toutes les langues. Les API du module ne sont valides que pour la langue actuelle.';
$lang_module['api_of_system'] = 'Système';
$lang_module['api_cr'] = 'Accès à l\'API';
$lang_module['api_cr_error_role_empty'] = 'Aucun rôle d\'API n\'est créé. Veuillez d\'abord créer une API de rôle. Le système bascule automatiquement sur la page de création de l\'API de rôle dans un instant';
$lang_module['api_remote_off'] = 'L\'API distante <strong>étant désactivée</strong>, les comptes disposant d\'un accès API ci-dessous ne pourront pas passer d\'appels d\'API. Pour effectuer un appel d\'API, <strong><a href="%s" target="_blank">activer l\'API à distance ici</a></strong>';
$lang_module['api_cr_last_access_none'] = 'Pas encore';
$lang_module['api_cr_last_access'] = 'Récemment utilisé';
$lang_module['api_cr_add'] = 'Ajouter un accès à l\'API';
$lang_module['api_cr_edit'] = 'Corriger l\'accès à l\'API';
$lang_module['api_cr_title'] = 'Décrivez les droits';
$lang_module['api_cr_for_admin'] = 'Sélectionnez l\'administrateur';
$lang_module['api_cr_roles'] = 'Sélectionnez le rôle de l\'API';
$lang_module['api_cr_roles1'] = 'Rôle API';
$lang_module['api_cr_error_title'] = 'Erreur: Veuillez entrer une description d\'accès à l\'API';
$lang_module['api_cr_error_admin'] = 'Erreur: Veuillez sélectionner l\'administrateur';
$lang_module['api_cr_error_roles'] = 'Erreur: Veuillez sélectionner l\'API de rôle';
$lang_module['api_cr_result'] = 'Voici la clé d\'accès et le code secret. Vous devez garder le code secret dans un endroit sûr avant de quitter cet écran. Après avoir quitté cet écran, vous ne serez pas en mesure de récupérer le code secret. Si vous perdez l\'accès et le code secret, vous devez recréer un autre accès à l\'API.';
$lang_module['api_cr_credential_ident'] = 'Touches d\'accès';
$lang_module['api_cr_credential_secret'] = 'Code secret';
$lang_module['api_cr_back'] = 'Fait copié';
$lang_module['api_cr_notice'] = 'Note: Gardez votre code secret secret et vos clés d\'accès spéciales secrètes. Si le code secret et la clé d\'accès sont exposés, les saboteurs peuvent effectuer des opérations indésirables';
$lang_module['api_System'] = 'Fonctions du système';
$lang_module['api_System_SendMail'] = 'Envoyer un email';
$lang_module['api_webtools'] = 'Outils Web';
$lang_module['api_webtools_ClearCache'] = 'Vider le cache';
$lang_module['other_info'] = 'Autres informations';
