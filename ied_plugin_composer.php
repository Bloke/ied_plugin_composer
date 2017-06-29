<?php

// This is a PLUGIN TEMPLATE for Textpattern CMS.

// Copy this file to a new name like abc_myplugin.php.  Edit the code, then
// run this file at the command line to produce a plugin for distribution:
// $ php abc_myplugin.php > abc_myplugin-0.1.txt

// Plugin name is optional.  If unset, it will be extracted from the current
// file name. Plugin names should start with a three letter prefix which is
// unique and reserved for each plugin author ("abc" is just an example).
// Uncomment and edit this line to override:
$plugin['name'] = 'ied_plugin_composer';

// Allow raw HTML help, as opposed to Textile.
// 0 = Plugin help is in Textile format, no raw HTML allowed (default).
// 1 = Plugin help is in raw HTML.  Not recommended.
# $plugin['allow_html_help'] = 1;

$plugin['version'] = '1.2.0';
$plugin['author'] = 'Yura Linnyk, Stef Dawson, Steve Dickinson';
$plugin['author_uri'] = 'http://stefdawson.com/';
$plugin['description'] = 'Create, publish and edit plugins from within Textpattern CMS';

// Plugin load order:
// The default value of 5 would fit most plugins, while for instance comment
// spam evaluators or URL redirectors would probably want to run earlier
// (1...4) to prepare the environment for everything else that follows.
// Values 6...9 should be considered for plugins which would work late.
// This order is user-overrideable.
$plugin['order'] = '5';

// Plugin 'type' defines where the plugin is loaded
// 0 = public              : only on the public side of the website (default)
// 1 = public+admin        : on both the public and admin side
// 2 = library             : only when include_plugin() or require_plugin() is called
// 3 = admin               : only on the admin side (no AJAX)
// 4 = admin+ajax          : only on the admin side (AJAX supported)
// 5 = public+admin+ajax   : on both the public and admin side (AJAX supported)
$plugin['type'] = '5';

// Plugin "flags" signal the presence of optional capabilities to the core plugin loader.
// Use an appropriately OR-ed combination of these flags.
// The four high-order bits 0xf000 are available for this plugin's private use
if (!defined('PLUGIN_HAS_PREFS')) define('PLUGIN_HAS_PREFS', 0x0001); // This plugin wants to receive "plugin_prefs.{$plugin['name']}" events
if (!defined('PLUGIN_LIFECYCLE_NOTIFY')) define('PLUGIN_LIFECYCLE_NOTIFY', 0x0002); // This plugin wants to receive "plugin_lifecycle.{$plugin['name']}" events

$plugin['flags'] = '3';

// Plugin 'textpack' is optional. It provides i18n strings to be used in conjunction with gTxt().
// Syntax:
// ## arbitrary comment
// #@event
// #@language ISO-LANGUAGE-CODE
// abc_string_name => Localized String

$plugin['textpack'] = <<<EOT
#@ied_plugin
ied_plugin_any => Any
ied_plugin_auto_enable => Auto-enable plugins on install
ied_plugin_cacheplugs_legend => Plugins in cache directory
ied_plugin_cache_not_set => Advanced pref "plugin cache directory" not defined
ied_plugin_check_type => Check your plugin type!
ied_plugin_choose_file => Please choose a file first
ied_plugin_code_dist => Plugin code for distribution
ied_plugin_code_legend => Plugin code
ied_plugin_code_save => Save code
ied_plugin_code_saved => Code saved
ied_plugin_code_saved_fail => Code saving failed
ied_plugin_composer => Plugin composer
ied_plugin_compress => Zip
ied_plugin_cpanel_legend => Installation
ied_plugin_create_new => Create new plugin
ied_plugin_dbplugs_legend => Plugins in database
ied_plugin_docs => Docs
ied_plugin_docs_legend => Plugin help
ied_plugin_edit => Edit: {name} v{version}
ied_plugin_editing => Editing {name} in Plugin Composer
ied_plugin_editor => Plugin editor
ied_plugin_editor_options => Plugin editor configuration options
ied_plugin_editor_path => Plugin editor URL
ied_plugin_editor_width => Plugin editor width
ied_plugin_edit_new => Edit your new plugin
ied_plugin_enable => Enabled
ied_plugin_export => Export as {name}
ied_plugin_export_textpack => Export textpack(s)
ied_plugin_export_zip => Export as {name} (compressed)
ied_plugin_flags => Flags
ied_plugin_flag_has_prefs => Has prefs
ied_plugin_flag_lifecycle_notify => Event notify
ied_plugin_fn_not_exist => (the function is probably javascript or mangled PHP)
ied_plugin_help_editor => Help editor
ied_plugin_help_editor_options => Help editor configuration options
ied_plugin_help_editor_path => Help editor URL
ied_plugin_help_not_available => Plugin help not available
ied_plugin_if_el_dist => Code for distribution
ied_plugin_if_el_style => Help style block
ied_plugin_if_settings => Interface settings
ied_plugin_install_textpack => Install file's Textpack
ied_plugin_install_txt => Install from .txt file
ied_plugin_interface_elems => Optional interface elements
ied_plugin_jump_to_line => Jump to line:
ied_plugin_langs_all => All available
ied_plugin_langs_installed => Only installed
ied_plugin_lang_choose => Textpack language list
ied_plugin_lang_default => Default textpack language
ied_plugin_list => Plugin list
ied_plugin_lbl_lc_delete => Delete
ied_plugin_lbl_lc_disable => Disable
ied_plugin_lbl_lc_disdel => Disable+Delete
ied_plugin_lbl_lc_enable => Enable
ied_plugin_lbl_lc_instable => Install+Enable
ied_plugin_lbl_lc_install => Install
ied_plugin_lbl_op_code_first => Code first
ied_plugin_lbl_op_help_first => Help first
ied_plugin_lbl_setup => Plugin composer setup
ied_plugin_lc_fired => Lifecycle event {event} fired for {name}
ied_plugin_lifecycle => Fire lifecycle event
ied_plugin_lifecycle_options => Perform lifecycle actions on
ied_plugin_load => Load
ied_plugin_load_order => Load order
ied_plugin_load_order_help => (1=first > 5=normal > 9=last)
ied_plugin_meta_legend => Meta information
ied_plugin_meta_save => Save meta
ied_plugin_meta_saved => Meta info saved
ied_plugin_meta_saved_fail => Meta info not saved
ied_plugin_msgpop_lbl => phpdoc block
ied_plugin_name_first => Please name the plugin before creating it
ied_plugin_output_order => PHP export order
ied_plugin_output_sfile => Export plugin filename format
ied_plugin_output_sfilec => Export compressed filename format
ied_plugin_output_sfilep => Plugin template filename format
ied_plugin_output_sfilet => Textpack filename format
ied_plugin_output_tmpcache => Cache Textiled help path
ied_plugin_pack_legend => Textpack strings
ied_plugin_php_doc => Make phpdoc
ied_plugin_prefs => Preferences
ied_plugin_prefs_deleted => Preferences deleted
ied_plugin_renamed => (renamed)
ied_plugin_rename_failed => (rename failed)
ied_plugin_rename_file => Rename file
ied_plugin_restored => Plugin {name} restored.
ied_plugin_restore_help => Roll back the plugin code to the most recent restore point
ied_plugin_restore_point => Restore point
ied_plugin_restore_verify => Are you sure you want to rollback the {name} source code to its last restore point?
ied_plugin_run_install => Perform post-install actions
ied_plugin_same => Same
ied_plugin_save_as => Save as {name}
ied_plugin_setup => Setup
ied_plugin_syntax_check => Syntax check on code save
ied_plugin_syntax_err => Syntax error
ied_plugin_toggle => Toggle
ied_plugin_tp_populate => Load strings from function
ied_plugin_tp_prefix => Textpack prefix
ied_plugin_type => Plugin type
ied_plugin_type_0 => Public
ied_plugin_type_1 => Admin + Public
ied_plugin_type_2 => Library
ied_plugin_type_3 => Admin only
ied_plugin_type_4 => Admin (+AJAX)
ied_plugin_type_5 => Admin + Public (+AJAX)
ied_plugin_updated => Plugin {name} updated
ied_plugin_uploaded => Plugin {name} uploaded
ied_plugin_upload_php => Upload plugin
ied_plugin_utils_legend => Distribution
ied_plugin_utils_legend_extra => Only for use after saving
ied_plugin_view_help => Help: {name}
#@ied_plugin
#@language fr-fr
ied_plugin_any => Tous
ied_plugin_auto_enable => Activer les plugins dès leur installation
ied_plugin_cacheplugs_legend =>
ied_plugin_cache_not_set => Le paramètre "chemin du cache des plugins" des préférences avancées n'est pas renseigné
ied_plugin_check_type => Renseignez le type de votre plugin !
ied_plugin_choose_file => Veuillez choisir d'abord un fichier
ied_plugin_code_dist => Code de distribution du plugin
ied_plugin_code_legend => Code source du plugin
ied_plugin_code_save => Sauvegarder le code
ied_plugin_code_saved => Code sauvegardé
ied_plugin_code_saved_fail => Échec de sauvegarde du code
ied_plugin_composer => Plugin composer
ied_plugin_compress => Zip
ied_plugin_cpanel_legend => Installation
ied_plugin_create_new => Créer un nouveau plugin
ied_plugin_dbplugs_legend => Plugins disponibles
ied_plugin_docs => Docs
ied_plugin_docs_legend => Aide du plugin
ied_plugin_edit => Éditer : {name} v{version}
ied_plugin_editing => Édition de {name} depuis Plugin Composer
ied_plugin_editor => Éditeur de plugins
ied_plugin_editor_options => Options de configuration de l'éditeur de plugins
ied_plugin_editor_path => URL de l'éditeur de plugins
ied_plugin_editor_width => Taille (largeur) de l'éditeur de plugin
ied_plugin_edit_new => Éditer votre nouveau plugin
ied_plugin_enable => Activé
ied_plugin_export => Exporter sous {name}
ied_plugin_export_textpack => Exporter le(s) textpack(s)
ied_plugin_export_zip => Exporter sous {name} (compressé)
ied_plugin_flags => Flags
ied_plugin_flag_has_prefs => A les préfs
ied_plugin_flag_lifecycle_notify => Notification d'événement
ied_plugin_fn_not_exist => (la fonction est probablement en javascript ou contient du PHP corrompu)
ied_plugin_help_editor => Éditeur de l'aide
ied_plugin_help_editor_options => Configuration pour l'éditeur de l'aide
ied_plugin_help_editor_path => URL pour l'éditeur de l'aide
ied_plugin_help_not_available => Aide du plugin non disponible
ied_plugin_if_el_dist => Code de distribution
ied_plugin_if_el_style => Bloc CSS pour l'aide
ied_plugin_if_settings => Paramètres de l'interface
ied_plugin_install_txt => Installer depuis un fichier .txt
ied_plugin_interface_elems => Éléments optionels de l'interface
ied_plugin_jump_to_line => Aller à la ligne :
ied_plugin_langs_all => Toutes disponibles
ied_plugin_langs_installed => Seulement installées
ied_plugin_lang_choose => Liste des traductions (Textpack)
ied_plugin_lang_default => Langue par défaut (Textpack)
ied_plugin_list =>
ied_plugin_lbl_lc_delete => Supprimer
ied_plugin_lbl_lc_disable => Désactiver
ied_plugin_lbl_lc_enable => Activer
ied_plugin_lbl_lc_install => Installer
ied_plugin_lbl_op_code_first => Code au début
ied_plugin_lbl_op_help_first => Aide au début
ied_plugin_lbl_setup => Configuration de Plugin composer
ied_plugin_lifecycle_options => Réaliser les actions "lifecycle" sur
ied_plugin_load => Charger
ied_plugin_load_order => Ordre de chargement
ied_plugin_load_order_help => (1=premier > 5=normal > 9=dernier)
ied_plugin_meta_legend => Meta information
ied_plugin_meta_save =>
ied_plugin_meta_saved =>
ied_plugin_meta_saved_fail =>
ied_plugin_msgpop_lbl => Bloc phpdoc
ied_plugin_name_first => Veuillez nommer le plugin avant de pouvoir le créer
ied_plugin_output_order => Orde d'exportation du source PHP
ied_plugin_output_sfile => Noms d'exportation des fichiers plugin
ied_plugin_output_sfilec => Noms des fichiers compressés
ied_plugin_output_sfilep => Noms des fichiers Plugin
ied_plugin_output_sfilet => Noms des fichiers Textpack
ied_plugin_output_tmpcache => Chemin du cache de l'aide sous Textile
ied_plugin_pack_legend => Chaînes du Textpack
ied_plugin_php_doc => Créer un phpdoc
ied_plugin_prefs => Préférences
ied_plugin_prefs_deleted => Préférences supprimées
ied_plugin_renamed => (renomé)
ied_plugin_rename_failed => (échec de renomage)
ied_plugin_rename_file => Renomer le fichier
ied_plugin_restored => Plugin {name} restauré.
ied_plugin_restore_help => Restituer le code du plugin à partir de son dernier point de restauration
ied_plugin_restore_point => Point de restauration
ied_plugin_restore_verify => Êtes-vous sûr de vouloir restituer le code source de {name} à partir de son dernier point de restauration ?
ied_plugin_run_install => Effectuer les actions de post-installation
ied_plugin_same => Nom
ied_plugin_save_as => Sauver sous {name}
ied_plugin_setup => Configuration
ied_plugin_syntax_check => Vérifier la syntaxe du code avant sauvegarde
ied_plugin_syntax_err => Erreur de syntaxe
ied_plugin_tp_populate => Essayer de charger les chaînes depuis la fonction
ied_plugin_tp_prefix => Préfixe du Textpack
ied_plugin_type => Type de plugin
ied_plugin_type_0 => Public
ied_plugin_type_1 => Admin + Public
ied_plugin_type_2 => Librarie
ied_plugin_type_3 => Admin seul
ied_plugin_type_4 => Admin (+AJAX)
ied_plugin_type_5 => Admin + Public (+AJAX)
ied_plugin_updated => Plugin {name} mis à jour
ied_plugin_uploaded => Plugin {name} téléchargé
ied_plugin_upload_php => Télécharger un plugin
ied_plugin_utils_legend => Distribution
ied_plugin_utils_legend_extra => Effectif après sauvegarde
ied_plugin_view_help => Aide de : {name}
EOT;

if (!defined('txpinterface'))
        @include_once('zem_tpl.php');

# --- BEGIN PLUGIN CODE ---
// <?php
/**
 * ied_plugin_composer
 *
 * A Textpattern CMS plugin for writing, editing and sharing plugins
 *  -> Create and edit admin-side or public plugins
 *  -> Supports plugin lifecycle events and prefs
 *  -> Supports Textpacks
 *  -> Optional syntax checker on save
 *
 * @author Yura Linnyk
 * @author Stef Dawson
 * @author Steve Dickinson
 * @link   http://stefdawson.com/
 */

// TODO:
//  * Use href() (from 4.6.+) for anchor creation to avoid double-encoded ampersands
//  * Figure out why syntax checker doesn't jump to line number sometimes (AJAX fails with error but it's not handled)
//  * Show which langs have installed strings in the distribution section so the correct langs in the select list can be chosen
//  * Find out why uploading PHP files sometiems throws an error even though it succeeds
//  * jQuery on editor dropdowns in setup
//  * phpdoc

if (txpinterface === 'admin') {
    new ied_pc();
} elseif (txpinterface === 'public') {
    if (class_exists('\Textpattern\Tag\Registry')) {
        Txp::get('\Textpattern\Tag\Registry')
            ->register('ied_plugin_list')
            ->register('ied_plugin_info')
            ->register('ied_plugin_textpacks')
            ->register('ied_plugin_download')
            ->register('ied_plugin_download_link');
    }

    register_callback('ied_plugin_download', 'pretext');

    /*
     * Public tag: List plugins, filtered by name or prefix.
     *
     * @param array  $atts  Tag attributes
     * @param string $thing Tag container content
     */
    function ied_plugin_list($atts = array(), $thing = null)
    {
        global $ied_plugin_data;

        extract(lAtts(array(
            'from'       => 'database', // database, cache (or both)
            'name'       => '', // List of plugin names to return
            'prefix'     => '', // Plugin prefixes
            'exclude'    => '', // names to exclude from the list
            'type'       => '', // 0-5 or comma-separated combos thereof
            'wraptag'    => '',
            'class'      => '',
            'break'      => '',
            'breakclass' => '',
            'html_id'    => '',
            'form'       => '',
        ),$atts));

        $thing = (empty($form)) ? ((empty($thing)) ? '<txp:ied_plugin_info item="name" />' : $thing) : fetch_form($form);

        $location = do_list($from);
        $names = do_list($name);
        $prefixes = do_list($prefix);
        $excludes = do_list($exclude);

        if (in_array('database', $location)) {
            $sql = array();
            $sql[] = '1';
            if ($name) {
                $sql[] = "name IN ('".implode("','", doSlash($names))."')";
            }
            if ($prefix) {
                $sqlor = array();
                foreach ($prefixes as $pfx) {
                    $sqlor[] = "name LIKE '".doSlash($pfx)."%'";
                }
                $sql[] = '(' . implode(' OR ', $sqlor) . ')';
            }
            if ($exclude) {
                $sql[] = "name NOT IN ('".implode("','", doSlash($excludes))."')";
            }

            $rs = safe_rows('*', 'txp_plugin', implode(' AND ', $sql) . ' ORDER BY name');
        }

        // TODO: Add the meta data from matching plugins in the cache directory
        if (in_array('cache', $location)) {


        }

        $out = array();
        $ied_pd_saved = $ied_plugin_data;

        foreach ($rs as $row) {
            $ied_plugin_data = $row;
            $ied_plugin_data['help_unstyled'] = preg_replace('/\<\!\-\- \*\*\* BEGIN PLUGIN CSS.+END PLUGIN CSS \*\*\* \-\-\>/s', '', $row['help']);
            $out[] = parse($thing);
            $ied_plugin_data = array();
        }

        $ied_plugin_data = $ied_pd_saved;

        return ($wraptag) ? doWrap($out, $wraptag, $break, $class, $breakclass, '', '', $html_id) : implode($break, $out);
    }

    /**
     * Public tag: Display plugin data for form/container usage.
     *
     * @param array  $atts  Tag attributes
     * @param string $thing Tag container content
     */
    function ied_plugin_info($atts, $thing = null)
    {
        global $ied_plugin_data;

        extract(lAtts(array(
            'item'    => '',
            'wraptag' => '',
            'break'   => '',
            'class'   => '',
            'debug'   => 0,
        ), $atts));

        $pdata = is_array($ied_plugin_data) ? $ied_plugin_data : array();

        if ($debug) {
            echo '++ AVAILABLE INFO ++';
            dmp($pdata);
        }

        $items = do_list($item);
        $out = array();

        foreach ($items as $it) {
            if (isset($pdata[$it])) {
                $out[] = $pdata[$it];
            }
        }

        return doWrap($out, $wraptag, $break, $class);
    }

    /**
     * Public tag: List of available textpack information.
     *
     * @param array  $atts  Tag attributes
     * @param string $thing Tag container content
     */
    function ied_plugin_textpacks($atts, $thing = null)
    {
        global $ied_plugin_data;

        extract(lAtts(array(
            'name'     => '',
            'filename' => '',
            'lang'     => 'IED_ALL',
            'wraptag'  => '',
            'break'    => '',
            'class'    => '',
            'form'     => '',
        ), $atts));

        if (!$name && !$filename) {
            return;
        }

        if ($name) {
            $theName = $name;
        } elseif ($filename) {
            $theName = $filename;
        }

        $thing = (empty($form)) ? ((empty($thing)) ? '<txp:ied_plugin_info item="lang" />' : $thing) : fetch_form($form);

        $langs = array();
        $tp_prefixes = unserialize(get_pref('ied_plugin_tp_prefix', ''));

        if (isset($tp_prefixes[$theName])) {
            $strings = $this->textpack_grab($lang, $tp_prefixes[$theName]);
            foreach ($strings as $row) {
                if (array_search($row['lang'], $langs) === false) {
                    $langs[] = $row['lang'];
                }
            }
        }
        $out = array();
        $ied_pd_saved = $ied_plugin_data;
        $idx = 0;
        $num_langs = count($langs);

        foreach ($langs as $row) {
            $ied_plugin_data['lang'] = $row;
            $ied_plugin_data['first_lang'] = (($idx === 0) ? 1 : 0);
            $ied_plugin_data['last_lang'] = (($idx === $num_langs - 1) ? 1 : 0);
            $out[] = parse($thing);
            $ied_plugin_data['lang'] = $ied_plugin_data['first_lang'] = $ied_plugin_data['last_lang'] = '';
            $idx++;
        }
        $ied_plugin_data = $ied_pd_saved;

        return doWrap($out, $wraptag, $break, $class);
    }

    /**
     * Public tag: Download a plugin.
     *
     * @param array  $atts  Tag attributes
     * @param string $thing Tag container content
     */
    function ied_plugin_download_link($atts, $thing = null)
    {
        extract(lAtts(array(
            'type'     => 'compressed', // uncompressed, compressed, template, textpack
            'name'     => '',
            'filename' => '',
            'label'    => 'Download',
            'class'    => '',
            'lang'     => 'IED_ALL',
            'form'     => '',
            'escape'   => 'html',
        ), $atts));

        if (!$name && !$filename) {
            return;
        }

        $amp = ($escape === 'html') ? '&amp;' : '&';

        if ($name) {
            $theName = $amp.'name='.urlencode($name);
        } elseif ($filename) {
            $theName = $amp.'filename='.urlencode($filename);
        }

        $theClass = '';
        if ($class) {
            $theClass = ' class="'.$class.'"';
        }
        $langopt = '';
        if ($lang) {
            $langs = do_list($lang);
            $langopt = $amp.'lang='.implode(',', $langs);
        }

        $linkName = (empty($form)) ? ((empty($thing)) ? $label : parse($thing)) : parse_form($form);

        if ($type === 'compressed') {
            return href($linkName, '?ied_plugin_download=1'.$theName.$amp.'type=zip'.$langopt, $theClass);
        } elseif ($type === 'uncompressed') {
            return href($linkName, '?ied_plugin_download=1'.$theName.$amp.'type=txt'.$langopt, $theClass);
        } elseif ($type === 'template') {
            return href($linkName, '?ied_plugin_download=1'.$theName.$amp.'type=php'.$langopt, $theClass);
        } elseif ($type === 'textpack') {
            return href($linkName, '?ied_plugin_download=1'.$theName.$amp.'type=textpack'.$langopt, $theClass);
        }
    }

    /**
     * Handles downloading plugin content.
     */
    function ied_plugin_download()
    {
        if (gps('ied_plugin_download')) {
            $type = gps('type');
            switch ($type) {
                case 'zip':
                case 'txt':
                    $ied_pc = new ied_pc();
                    $ied_pc->save_as_file();
                    break;
                case 'php':
                    $ied_pc = new ied_pc();
                    $ied_pc->save_as_php_file();
                    break;
                case 'textpack':
                    $ied_pc = new ied_pc();
                    $ied_pc->save_as_textpack();
                    break;
            }
        }
    }
}

/**
 * Plugin composer admin interface.
 */
class ied_pc
{
    /**
     * Shared information across methods.
     *
     * @var array
     */
    protected $ied_plugin_globals = array();

    /**
     * The plugin's event as registered in Txp.
     *
     * @var string
     */
    protected $ied_pc_event = 'ied_plugin_composer';

    /**
     * Constructor to set up callbacks and environment.
     */
    public function __construct()
    {
        $this->ied_plugin_globals = array(
            'css_start' => '<!--',
            'css_end'   => '-->',
            'dlm_start' => '#',
            'dlm_end'   => '',
            'start'     => ' --- BEGIN PLUGIN SECTION ---',
            'end'       => ' --- END PLUGIN SECTION ---',
            'size_help' => '63535',
            'size_css'  => '2000',
            'size_code' => '16777215',
        );

        add_privs($this->ied_pc_event, '1,2');
        add_privs('plugin_prefs.' . $this->ied_pc_event, '1,2');

        register_tab('extensions', $this->ied_pc_event, gTxt('ied_plugin_composer'));
        register_callback(array($this, 'plugin_composer'), $this->ied_pc_event);
        register_callback(array($this, 'setup'), 'plugin_prefs.' . $this->ied_pc_event);
        register_callback(array($this, 'welcome'), 'plugin_lifecycle.' . $this->ied_pc_event);
        register_callback(array($this, 'inject_css'), 'admin_side', 'head_end');
    }

    /**
     * CSS definitions: hopefully kind to themers.
     *
     * @return string Style rules
     */
    protected function get_style_rules()
    {
        $ied_pc_styles = array(
            'ied_plugin' => '
.ied_label { margin:0 0.2em 0 0.6em;}
.ied_plugin_link { float:right; }
.ied_plugin_info_bar { text-align:right; }
#ied_plugin_jumpToLine { width:4em; margin:0 1em 0 0.4em; }
.ied_editForm { width:{edwidth}; margin:0 auto; }
.ied_subdue { color:gray; padding:1px 2px 2px 1px; }
#ied_plugin_tp_controls input[type="text"] { width:16%; }
#options_group_pack ul { list-style-type:none; }
#options_group_pack ul label { margin:0 8px 0 0; }
#options_group_pack ul input { width:450px; }
#options_group_pack li { margin-bottom:.2em }
.distribution-code { height:4.2em!important; }
.ied_plugin_edit_toolbar { text-align:right; width:95%; display:inline-block; margin:-2em 0 0 0; }
#ied_plugin_msgpop { display:none; position:absolute; left:200px; max-width:500px; border:3px ridge #999; opacity:.92; filter:alpha(opacity:92); padding:15px 20px; background-color:#e2dfce; color:#80551e; }
#ied_plugin_msgpop .publish { float:right; }
    ',
        );

        return $ied_pc_styles;
    }

    /**
     * Inject style rules into the &lt;head&gt; of the page.
     *
     * @param  string $evt Textpattern event
     * @param  string $stp Textpattern step (action)
     * @return string      Style rules, or nothing if not the correct $event
     */
    public function inject_css($evt, $stp)
    {
        global $event;

        if ($event === $this->ied_pc_event) {
            $ied_plugin_prefs = $this->get_prefs();
            $ied_plugin_styles = $this->get_style_rules();

            // Possible variable replacements.
            $edwidth = get_pref('ied_plugin_editor_width', $ied_plugin_prefs['ied_plugin_editor_width']['default']);
            $stylefind = array(
                '{edwidth}',
            );
            $stylereps = array(
                $edwidth,
            );

            echo '<style type="text/css">' . str_replace($stylefind, $stylereps, $ied_plugin_styles['ied_plugin']) . '</style>';
        }

        return;
    }

    /**
     * Plugin jumpoff point.
     *
     * @param  string $evt Textpattern event
     * @param  string $stp Textpattern step (action)
     */
    public function plugin_composer($evt, $stp)
    {
        $available_steps = array(
            'code_save'        => true,
            'create'           => true,
            'edit'             => false,
            'generate_phpdoc'  => true,
            'help'             => true,
            'help_viewer'      => false,
            'install'          => true,
            'lang_set'         => true,
            'table'            => false,
            'meta_save'        => true,
            'multi_edit'       => true,
            'prefs'            => false,
            'restore'          => true,
            'save'             => true,
            'save_as_file'     => true,
            'save_as_php_file' => true,
            'save_as_textpack' => true,
            'set_tp_prefix'    => true,
            'switch_status'    => true,
            'textpack_del'     => true,
            'textpack_get'     => true,
            'textpack_load'    => true,
            'textpack_save'    => true,
            'upload'           => true,
            'save_pane_state'  => true,
        );

        if (!$stp or !bouncer($stp, $available_steps)) {
            $stp = 'table';
        }

        $this->$stp();
    }

    /**
     * Lifecycle handling, post-install / delete.
     *
     * @param  string $evt Textpattern event
     * @param  string $stp Textpattern step (action)
     * @return string      Success/failure message
     */
    public function welcome($evt, $stp)
    {
        $msg = '';

        switch ($stp) {
            case 'installed':
                $this->prefs_update();
                $msg = 'Thanks for installing the plugin composer. Happy authoring :-)';
                break;
            case 'deleted':
                $this->prefs_remove(0);
                break;
        }

        return $msg;
    }

    /**
     * Table of plugins in both database and file system cache.
     *
     * @param  string $message Flash message to display success/error
     * @return string          HTML
     */
    public function table($message = '')
    {
        pagetop(gTxt('ied_plugin_composer'), $message);

        require_privs('ied_plugin_composer');

        $ied_plugin_prefs = $this->get_prefs();

        $lc_opts = do_list(get_pref('ied_plugin_lifecycle_options'));
        $checked = in_array('installed', $lc_opts);
        $auto_en = get_pref('ied_plugin_auto_enable');
        $pcd = get_pref('plugin_cache_dir');

        $aeRadio[] = '<p class="ied_plugin_radioset ied_plugin_autoenable txp-layout-2col">';
        $aeRadio[] = '<label class="ied_label">' . gTxt('ied_plugin_auto_enable') . '</label>';
        $aeRadio[] = radioset($ied_plugin_prefs['ied_plugin_auto_enable']['content'], 'ied_plugin_autoenable', $auto_en);
        $aeRadio[] = '</p>';

        $ioRadio[] = '<p class="ied_plugin_radioset ied_plugin_installopts txp-layout-2col" hidden>';
        $ioRadio[] = '<label class="ied_label">' . gTxt('ied_plugin_run_install') . '</label>';
        $ioRadio[] = yesnoradio('ied_plugin_installopts', $checked);
        $ioRadio[] = '</p>';

        extract(gpsa(array('sort', 'dir')));

        if ($sort === '') $sort = get_pref('ied_plugin_sort_column', 'name');
        if ($dir === '') $dir = get_pref('ied_plugin_sort_dir', 'asc');
        $dir = ($dir == 'desc') ? 'desc' : 'asc';
        if (!in_array($sort, array('name', 'status', 'author', 'version', 'load_order'))) $sort = 'name';

        $sort_sql = $sort.' '.$dir;

        set_pref('ied_plugin_sort_column', $sort, 'ied_plugin', PREF_HIDDEN, '', 0, PREF_PRIVATE);
        set_pref('ied_plugin_sort_dir', $dir, 'ied_plugin', PREF_HIDDEN, '', 0, PREF_PRIVATE);

        $switch_dir = ($dir == 'desc') ? 'asc' : 'desc';

        // Top control-panel part of screen
        echo '<div class="txp-layout">'.
            n. '<div class="txp-layout-2col">'.
            n. '<h1 class="txp-heading">'.gTxt('ied_plugin_composer').sp.$this->anchor($this->ied_pc_event, 'help_viewer', '?', array('name' => 'ied_plugin_composer'), array('class' => 'pophelp')).'</h1>'.
            n. '</div>'.
            n. '<div id="ied_plugin_control" class="txp-layout-2col">'.
            n. sLink($this->ied_pc_event, 'prefs', gTxt('ied_plugin_setup'), 'ied_plugin_link').
            n. '</div>'.
            n. '<div class="txp-layout-1col">'.
            n. '<div class="summary-details clear"><h3 class="lever txp-summary'.(get_pref('pane_ied_plugin_cpanel_visible') ? ' expanded' : '').'"><a href="#ied_plugin_cpanel">' . gTxt('ied_plugin_cpanel_legend') . '</a></h3><div id="ied_plugin_cpanel" class="toggle" style="display:'.(get_pref('pane_ied_plugin_cpanel_visible') ? 'block' : 'none').'">'.
            n. '<form class="ied_plugin_form" enctype="multipart/form-data" action="index.php" method="post">'.
            n. implode(n, $aeRadio).
            n. implode(n, $ioRadio).
            n. '<p class="clear">'.
            n. '<label for="ied_plugin_newname" class="ied_label">'.gTxt('name').'</label>'.
            n. fInput('text', 'name', '', '', '', '', INPUT_REGULAR, '', 'ied_plugin_newname', false, false, 'Create a new plugin').
            n. fInput('submit', 'plugin_create', gTxt('create')).
            n. '</p>'.
            n. '<p>'.
            n. '<label for="ied_plugin_file" class="ied_label">'.gTxt('ied_plugin_upload_php').'</label>'.
            n. fInput('file', 'thefile', '', '', '', '', '', '', 'ied_plugin_file').
            n. fInput('submit', 'plugin_upload', gTxt('upload')).
            n. '</p>'.
            n. '<p>'.
            n. '<label for="ied_plugin64" class="ied_label">'.gTxt('ied_plugin_install_txt').'</label>'.
            n. text_area('plugin64', '', '', '', 'ied_plugin64').
            n. fInput('submit', 'plugin_install', gTxt('install')).
            n. '</p>'.
            n. eInput($this->ied_pc_event).
            n. sInput('create').
            n. hInput('MAX_FILE_SIZE', 1000000).
            n. tInput().
            n. '</form>'.
            n. '</div>'.
            n. '</div>'.
            n. '</div>';

        // Main plugin list
        $rs = safe_rows('*', 'txp_plugin', '1=1 ORDER BY '.$sort_sql);

        if ($rs) {
            echo '<div class="txp-layout-1col">'.
                n. '<div class="summary-details">'.
                n. '<form action="index.php" id="ied_plugin_db_form" method="post">'.
                n. '<h3 class="lever txp-summary'.(get_pref('pane_ied_plugin_dbplugs_visible') ? ' expanded' : '').'">'.
                n. '<a href="#ied_plugin_dbplugs">' . gTxt('ied_plugin_dbplugs_legend') . '</a>'.
                n. '</h3>'.
                n. '<div id="ied_plugin_dbplugs" class="toggle" style="display:'.(get_pref('pane_ied_plugin_dbplugs_visible') ? 'block' : 'none').'">'.
            n. '<div class="txp-listtables">'.
            n. startTable('', '', 'txp-list').
            n.'<thead>'.
            n. tr(
                n.hCell(fInput('checkbox', 'select_all', 0, '', '', '', '', '', 'select_all'), '', ' title="'.gTxt('toggle_all_selected').'" class="multi-edit"')
                .n.column_head('plugin', 'name', 'ied_plugin_composer', true, $switch_dir, '', '', (('name' == $sort) ? "$dir " : '').'name')
                .n.column_head('author', 'author', 'ied_plugin_composer', true, $switch_dir, '', '', (('author' == $sort) ? "$dir " : '').'author')
                .n.column_head(gTxt('version').' ('.gTxt('plugin_modified').')', 'version', 'ied_plugin_composer', true, $switch_dir, '', '', (('version' == $sort) ? "$dir " : '').'version')
                .n.hCell(gTxt('description'), '', ' class="description"')
                .n.hCell(gTxt('manage'), '', ' class="manage"')
                .n.column_head('active', 'status', 'ied_plugin_composer', true, $switch_dir, '', '', (('status' == $sort) ? "$dir " : '').'status')
            ).
            n. '</thead>'.
            n. '<tbody>';

            foreach ($rs as $row) {
                extract($row);
                $ename = $this->anchor($this->ied_pc_event, 'edit', $name, array('name' => $name));
                $hlink = ($help) ? $this->anchor($this->ied_pc_event, 'help_viewer', gTxt('ied_plugin_docs'), array('name' => $name)) : gTxt('none');
                $fnames = $this->get_name($name, $version);
                $pubtag = $this->anchor($this->ied_pc_event, 'save_as_file', gTxt('publish'), array('name' => $name), array('title' => gTxt('ied_plugin_export', array('{name}' => $fnames[0]))));
                $pubztag = $this->anchor($this->ied_pc_event, 'save_as_file', gTxt('ied_plugin_compress'), array('name' => $name, 'type' => 'zip'), array('title' => gTxt('ied_plugin_export', array('{name}' => $fnames[1]))));
                $modified = (strtolower($code) != (strtolower($code_restore)));
                $plugpref = ($flags & PLUGIN_HAS_PREFS) ? (sp.$this->anchor('plugin_prefs.'.urlencode($name), '', '['.gTxt('plugin_prefs').']', array('name' => $name), array('class' => 'plugin_prefs'.( ($status) ? '' : ' empty'))) ) : '';

                echo tr(
                    n.td(
                        fInput('checkbox', 'selected[]', $name)
                    ,'', 'multi-edit')
                    .n.td($ename.$plugpref)
                    .n.td(( ($author_uri) ? '<a href="'.txpspecialchars($author_uri).'">'.txpspecialchars($author).'</a>' : txpspecialchars($author)))
                    .n.td(( ($modified) ? $this->anchor($this->ied_pc_event, 'restore', $version, array('name' => $name), array('title' => gTxt('ied_plugin_restore_help'), 'onclick' => 'return verify(\''.gTxt('ied_plugin_restore_verify', array('{name}' => $name)).'\');')) : $version) . (($modified) ? sp.'('.gTxt('yes').')' : ''))
                    .n.td(txpspecialchars($description))
                    .n.td($pubtag .sp. '&#124;' .sp. $pubztag .sp. '&#124;' .sp. $hlink)
                    .n.td($this->status_link($status,$name,yes_no($status)))
                );
                unset($name,$page);
            }
            echo n. '</tbody>'.
                n. endTable().
                n. '</div>'.
                n. '</div>'.
                n. tInput().
                $this->multiedit_form('db', '', $sort, $dir, '', '').
                n. '</form>'.
                n. '</div>'.
                n. '</div>';
        }

        if (!empty($pcd) && file_exists($pcd)) {
            $filenames = array();

            $directory = dir($pcd);

            while ($file = $directory->read()) {
                if ($file != "." && $file != "..") {
                    $fileaddr = $pcd . DS . $file;
                    if (!is_dir($fileaddr)) {
                        $filenames[]=$file;
                    }
                }
            }
            $directory->close();
            ($filenames)?natcasesort($filenames):'';

            $out = array();

            foreach ($filenames as $filename) {
                $parts = explode ('.',$filename);
                $fileext = array_pop($parts);

                if ($fileext=='php') {
                    $basename = basename($filename);
                    $plugin = $this->read_file($pcd . DS . $filename);
                    $hlink = ($plugin['help']) ? $this->anchor($this->ied_pc_event, 'help_viewer', gTxt('ied_plugin_docs'), array('filename' => $filename)) : gTxt('none');
                    $efile = $this->anchor($this->ied_pc_event, 'edit', $plugin['name'], array('filename' => $filename));
                    $fnames = $this->get_name($plugin['name'], $plugin['version']);
                    $plugpref = (($plugin['flags'] & PLUGIN_HAS_PREFS)) ? ' '.$this->anchor('plugin_prefs.'.urlencode($plugin['name']), '', ' ['.gTxt('plugin_prefs').']') : '';
                    $pubtag = $this->anchor($this->ied_pc_event, 'save_as_file', gTxt('publish'), array('filename' => $filename), array('title' => gTxt('ied_plugin_export', array('{name}' => $fnames[0]))));
                    $pubztag = $this->anchor($this->ied_pc_event, 'save_as_file', gTxt('ied_plugin_compress'), array('filename' => $filename, 'type' => 'zip'), array('title' => gTxt('ied_plugin_export', array('{name}' => $fnames[1]))));

                    $out[] = tr(
                        n.td(
                            fInput('checkbox', 'selected-cache[]', $filename)
                        ,'', 'multi-edit')
                        .n.td(
                            tag($filename,'div',' class="ied_subdue"')
                            .(isset($plugin['name']) ? $efile.$plugpref.'<br />' : '').' '
                        )
                        .n.td(
                            ( isset($plugin['author_uri']) ? '<a href="'.$plugin['author_uri'].'">' : '' ) .
                            ( isset($plugin['author']) ? $plugin['author'] : '&nbsp;' ).
                            ( isset($plugin['author_uri']) ? '</a>' : '' )
                        )
                        .n.td(
                            (isset($plugin['version']) ? $plugin['version'] : '&nbsp;')
                        )
                        .n.td(
                            (isset($plugin['description']) ? $plugin['description'] : '&nbsp;')
                        )
                        .n.td(
                            (isset($plugin['name']) ? $pubtag .sp. '&#124;' .sp. $pubztag
                                : tag('&nbsp;', 'span')
                            )
                            .sp. '&#124;' .sp. $hlink
                        )
                    );
                }
            }

            if ($out) {
                echo '<div class="txp-layout-1col">'.
                    n. '<div class="summary-details">'.
                    n. '<form action="index.php" id="ied_plugin_cache_form" method="post">'.
                        n. '<h3 class="lever txp-summary'.(get_pref('pane_ied_plugin_cacheplugs_visible') ? ' expanded' : '').'">'.
                        n. '<a href="#ied_plugin_cacheplugs">' . gTxt('ied_plugin_cacheplugs_legend') . '</a>'.
                        n. '</h3>'.
                        n. '<div id="ied_plugin_cacheplugs" class="toggle" style="display:'.(get_pref('pane_ied_plugin_cacheplugs_visible') ? 'block' : 'none').'">'.
                    n. '<div class="txp-listtables ied_plugin_cacheplugs">'.
                    n.startTable('', '', 'txp-list').
                    n. '<thead>'.
                    n. tr(
                        n.hCell(fInput('checkbox', 'select_all', 0, '', '', '', '', '', 'select_all'), '', ' title="'.gTxt('toggle_all_selected').'" class="multi-edit"')
                        .n.hCell(gTxt('plugin'), '', ' class="name"')
                        .n.hCell(gTxt('author'), '', ' class="author"')
                        .n.hCell(gTxt('version') . ' ('.gTxt('plugin_modified').')', '', ' class="version"')
                        .n.hCell(gTxt('description'), '', ' class="description"')
                        .n.hCell(gTxt('manage'), '', ' class="manage"')
                    ).
                    n. '</thead>'.
                    n. '<tbody>'.
                    n. implode(n, $out).
                    n. '</tbody>'.
                    n. endTable().
                    n. '</div>'.
                    n. tInput().
                    $this->multiedit_form('cache', '', $sort, $dir, '', '').
                    n. '</form>'.
                    n. '</div>'.
                    n. '</div>'.
                    n. '</div>';
            }
        }

        echo '</div>'.
            n. script_js( <<<EOJS
$(document).ready(function () {
    $('#ied_plugin_db_form').txpMultiEditForm({
        'checkbox' : 'input[name="selected[]"][type=checkbox]'
    });

    $('#ied_plugin_cache_form').txpMultiEditForm({
        'checkbox' : 'input[name="selected-cache[]"][type=checkbox]'
    });

    var ied_io = $('.ied_plugin_installopts');

    $('#ied_plugin_file').change(function() {
        var fn = $(this).val();

        if (fn.substr(fn.lastIndexOf('.') + 1) === 'txt') {
            ied_io.show();
        } else {
            ied_io.hide();
        }
    });

    $('#ied_plugin64').on('blur, keyup', function() {
        if ($(this).val()) {
            ied_io.show();
        } else {
            ied_io.hide();
        }
    });
});
EOJS
                    );

        // Show/hide "Options" link by setting the appropriate class on the plugin's &lt;tr&gt;
        echo script_js(<<<EOJS
textpattern.Relay.register('txpAsyncHref.success', function (event, data) {
    jQuery(data.this).closest('tr').find('a.plugin_prefs').toggleClass('empty');
});
EOJS
        );
    }

    /**
     * Render a multi-edit dropdown list of actions.
     *
     * @param  string $flavour       Whether the dropdown is for file-based plugins or those in the DB
     * @param  string $page          Current page of results (unused)
     * @param  string $sort          Current sort column name
     * @param  string $dir           Current sort direction (asc or desc)
     * @param  string $crit          Current filter criteria (unused)
     * @param  string $search_method Column name upon which the search is being performed (unused)
     * @return HTML
     */
    protected function multiedit_form($flavour, $page, $sort, $dir, $crit, $search_method)
    {
        $orders = selectInput('order', array(1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8=>8, 9=>9), 5, false);
        $stati = selectInput('switch_status', array('toggle' => gTxt('ied_plugin_toggle'), 'on' => gTxt('on'), 'off' => gTxt('off')), 'toggle', false);
        $lifecycles = selectInput('ied_lc_event', array(
            'installed'         => gTxt('ied_plugin_lbl_lc_install'),
            'enabled'           => gTxt('ied_plugin_lbl_lc_enable'),
            'installed,enabled' => gTxt('ied_plugin_lbl_lc_instable'),
            'disabled'          => gTxt('ied_plugin_lbl_lc_disable'),
            'deleted'           => gTxt('ied_plugin_lbl_lc_delete'),
            'disabled,deleted'  => gTxt('ied_plugin_lbl_lc_disdel'),
        ));

        if ($flavour === 'db') {
            $methods = array(
                'changestatus' => array('label' => gTxt('changestatus'), 'html' => $stati),
                'changeorder'  => array('label' => gTxt('changeorder'), 'html' => $orders),
                'lifecycle'    => array('label' => gTxt('ied_plugin_lifecycle'), 'html' => $lifecycles),
                'delete'       => gTxt('delete'),
            );
        } else {
            $methods = array(
                'lifecycle' => array('label' => gTxt('ied_plugin_lifecycle'), 'html' => $lifecycles),
                'textpack'  => array('label' => gTxt('ied_plugin_install_textpack')),
                'delete'    => gTxt('delete'),
            );
        }

        return multi_edit($methods, $this->ied_pc_event, 'multi_edit', $page, $sort, $dir, $crit, $search_method);
    }

    /**
     * Handle multi-edit actions.
     */
    public function multi_edit()
    {
        $selected = ps('selected');
        $selected_cache = ps('selected-cache');
        $method = assert_string(ps('edit_method'));

        if ($selected && is_array($selected)) {
            $where = "name IN ('".implode("','", doSlash($selected))."')";
            $lc_opts = do_list(get_pref('ied_plugin_lifecycle_options'));

            switch ($method) {
                case 'delete':
                    foreach ($selected as $name) {
                        if (safe_field('flags', 'txp_plugin', "name ='".doSlash($name)."'") & PLUGIN_LIFECYCLE_NOTIFY) {
                            load_plugin($name, true);
                            if (in_array('disabled', $lc_opts)) {
                                callback_event("plugin_lifecycle.$name", 'disabled');
                            }
                            if (in_array('deleted', $lc_opts)) {
                                callback_event("plugin_lifecycle.$name", 'deleted');
                            }
                        }
                    }
                    safe_delete('txp_plugin', $where);
                    break;

                case 'changestatus':
                    switch (ps('switch_status')) {
                        case 'on':
                            $newstat = '1';
                            break;
                        case 'off':
                            $newstat = '0';
                            break;
                        case 'toggle':
                        default:
                            $newstat = '(1-status)';
                            break;
                    }

                    foreach ($selected as $name) {
                        if (safe_field('flags', 'txp_plugin', "name ='".doSlash($name)."'") & PLUGIN_LIFECYCLE_NOTIFY) {
                            $status = safe_field('status', 'txp_plugin', "name ='".doSlash($name)."'");
                            $status = $status ? 'disabled' : 'enabled';
                            load_plugin($name, true);
                            if (in_array($status, $lc_opts)) {
                                callback_event("plugin_lifecycle.$name", $status);
                            }
                        }
                    }

                    safe_update('txp_plugin', 'status = '.$newstat, $where);
                    break;

                case 'changeorder':
                    $order = min(max(intval(ps('order')), 1), 9);
                    safe_update('txp_plugin', 'load_order = '.$order, $where);
                    break;


                case 'lifecycle':
                    $lc_evs = do_list(ps('ied_lc_event'));
                    foreach ($selected as $name) {
                        foreach ($lc_evs as $lc_ev) {
                            callback_event("plugin_lifecycle.$name", $lc_ev);
                        }
                    }
                    break;
            }
        } else {
            $selected = array();
        }

        if ($selected_cache && is_array($selected_cache)) {
            $pcd = get_pref('plugin_cache_dir');

            switch ($method) {
                case 'delete':
                    foreach ($selected_cache as $name) {
                        $filenames = array();
                        $dir = dir($pcd);

                        while ($file = $dir->read()) {
                            if ($file != "." && $file != ".." && in_array($file, $selected_cache)) {
                                $fileaddr = $pcd . DS . $file;

                                if (!is_dir($fileaddr)) {
                                    unlink($fileaddr);
                                }
                            }
                        }

                        $dir->close();
                    }
                    break;

                case 'lifecycle':
                    $lc_evs = do_list(ps('ied_lc_event'));
                    foreach ($selected_cache as $name) {
                        $name = str_replace('.php', '', $name);
                        foreach ($lc_evs as $lc_ev) {
                            callback_event("plugin_lifecycle.$name", $lc_ev);
                        }
                    }
                    break;

                case 'textpack':
                    // Read the textpack from the .php file and call install_textpack()
                    $textpack = array();
                    foreach ($selected_cache as $name) {
                        $fileaddr = $pcd . DS . $name;

                        $contents = file($fileaddr);
                        $in_tp = $in_comment = false;
                        foreach ($contents as $row) {
                            if (strpos($row, '/**') === 0) {
                                $in_comment = true;
                            }
                            if (strpos($row, '**/') === 0) {
                                $in_comment = false;
                            }
                            if (strpos($row, 'EOT;') !== false) {
                                break;
                            }
                            if ($in_tp === true) {
                                $textpack[] = trim($row);
                            }
                            if (!$in_comment && strpos($row, '$plugin[\'textpack\']') !== false) {
                                $in_tp = true;
                      }
                   }
                    }

                    $done = install_textpack(implode(n, $textpack));
                break;
            }
        } else {
            $selected_cache = array();
        }

        $message = '';

        if ($selected || $selected_cache) {
            if ($method === 'delete') {
                $message = gTxt('plugin_deleted', array('{name}' => implode(', ', array_merge($selected, $selected_cache))));
            } elseif ($method === 'lifecycle') {
                $message = gTxt('ied_plugin_lc_fired', array('{name}' => implode(', ', array_merge($selected, $selected_cache)), '{event}' => implode(',', $lc_evs)));
            } elseif ($method === 'textpack') {
                $message = gTxt('textpack_strings_installed', array('{count}' => $done));
            } else {
                $message = gTxt('plugin_updated', array('{name}' => implode(', ', $selected)));
            }
        }
        $this->table($message);
    }

    /**
     * Render a hyperlink to another plugin composer method.
     *
     * @param  string $evt      Textpattern event destination
     * @param  string $stp      Textpattern step (action) destination
     * @param  string $linktext Text for the hyperlink
     * @param  array  $nv       Name-value tuples to add to the URL
     * @param  array  $atts     Name-value tuples to add to the anchor tag
     * @return HTML
     */
    protected function anchor($evt, $stp, $linktext, $nv = array(), $atts = array())
    {
        $nv['_txp_token'] = form_token();
        $atts['href'] = '?event=' . $evt . ($stp ? '&step=' . $stp : '') . '&' . http_build_query($nv);

        $attribs = '';

        foreach ($atts as $n => $v) {
            $attribs .= ' ' . txpspecialchars($n) . '="' . txpspecialchars($v) . '"';
        }

        return tag($linktext, 'a', $attribs);
    }

    /**
     * Render an asynchronous anchor tag for toggling plugin status.
     *
     * @param  string $status   Current plugin status (0=disabled, 1=enabled)
     * @param  string $name     Plugin name to toggle
     * @param  string $linktext Link text to display on the anchor
     * @return string           HTML
     */
    protected function status_link($status, $name, $linktext)
    {
        return asyncHref($linktext, array('step' => 'switch_status', 'thing' => $name),' title="'.($status==1 ? gTxt('disable') : gTxt('enable')).'"' );
    }

    /**
     * Toggle the status of the given plugin (params sent via POST)
     *
     * @return string New status
     */
    public function switch_status()
    {
        extract(array_map('assert_string', gpsa(array('thing', 'value'))));
        $change = ($value == gTxt('yes')) ? 0 : 1;

        safe_update('txp_plugin', "status = $change", "name = '".doSlash($thing)."'");

        $lc_opts = do_list(get_pref('ied_plugin_lifecycle_options'));
        $stp = $change ? 'enabled' : 'disabled';

        if (in_array($stp, $lc_opts) && (safe_field('flags', 'txp_plugin', "name='".doSlash($thing)."'") & PLUGIN_LIFECYCLE_NOTIFY) ) {
            load_plugin($thing, true);
            $message = callback_event("plugin_lifecycle.$thing", $stp);
        }

        echo gTxt($change ? 'yes' : 'no');
    }

    /**
     * Reset the given plugin to its last restore point.
     */
    public function restore()
    {
        $name = doSlash(gps('name'));
        safe_update("txp_plugin", "code = code_restore", "name='$name'");
        $this->table(gTxt('ied_plugin_restored', array('{name}' => $name)));
    }

    /**
     * Edit the selected plugin data.
     *
     * @param  string $message Flash message to display after action
     * @param  string $newfile Filename if plugin being edited is in the filesystem
     */
    public function edit($message = '', $newfile = '')
    {
        $newname = trim(gps('newname'));
        $filename = gps('filename');
        $editfile = $filename ? 1 : 0;
        $name = empty($newname) ? gps('name') : $newname;
        $name = ($newfile) ? $newfile : (($filename) ? $filename : $name);

        pagetop(gTxt('ied_plugin_editing', array('{name}' => txpspecialchars($name))), $message);
        require_privs('ied_plugin_composer');

        echo $this->insert_editors();

        if (!$editfile) {
            $rs = safe_row("author, author_uri, version, description, code, help, status, type, load_order, flags", "txp_plugin", "name='".doSlash($name)."'");
            extract($rs);
            list($css,$help) = ($help) ? $this->extract_hunk($help, "CSS", "<!--|-->", true) : array('',$help);
        } else {
            $plugin = $this->read_file(get_pref('plugin_cache_dir').DS.$name);
            $filename = $name;
            $name = explode ('.', $name);
            $fileext = array_pop($name);
            $name = implode($name);
            extract($plugin);
            $status = ($fileext=='php')? 1: 0;
        }

        $ifel = get_pref('ied_plugin_interface_elems');
        $distblock = (strpos($ifel, 'distribution') !== false);
        $styleblock = (strpos($ifel, 'style') !== false);
        $distribution = '';

        list ($start_css, $end_css) = $this->make_markers("CSS", $this->ied_plugin_globals['css_start'], $this->ied_plugin_globals['css_end']);

        if ($distblock) {
            $plugin['name'] = $name;
            $plugin['author'] = $author;
            $plugin['author_uri'] = $author_uri;
            $plugin['version'] = $version;
            $plugin['description'] = $description;
            $plugin['help'] = $this->textile($name, $help, $css, $start_css, $end_css);
            $plugin['code'] = $code;
            $plugin['type'] = $type;
            $plugin['order'] = $load_order;
            $plugin['flags'] = $flags;
            $plugin['md5'] = md5( $plugin['code'] );
            $distribution = '<textarea name="distribution" class="distribution-code" rows="1" onclick="this.select()">'.base64_encode(serialize($plugin)).'</textarea>';
        }

        for ($i = 1; $i <= 9; $i++) $orders[$i] = $i;

        $tp_pfx = unserialize(get_pref('ied_plugin_tp_prefix', '', 1));
        $tp_pfx = isset($tp_pfx[$name]) ? $tp_pfx[$name] : '';

        $fnames = $this->get_name($name, $version);
        $namedLink = ($filename) ? array('filename' => $filename) : array('name' => $name);
        $zippedLink = array_merge($namedLink, array('type' => 'zip'));

        $slink = $this->anchor($this->ied_pc_event, 'save_as_file', gTxt('ied_plugin_export', array('{name}' => $fnames[0])), $namedLink);
        $sziplink = $this->anchor($this->ied_pc_event, 'save_as_file', gTxt('ied_plugin_export_zip', array('{name}' => $fnames[1])), $zippedLink);
        $sphplink = $this->anchor($this->ied_pc_event, 'save_as_php_file', gTxt('ied_plugin_save_as', array('{name}' => $fnames[2])), $namedLink);
        $stxtlink = $this->anchor($this->ied_pc_event, 'save_as_textpack', gTxt('ied_plugin_export_textpack'), $namedLink);
        $vhelplinkfull = ($help) ? '[ ' .$this->anchor($this->ied_pc_event, 'help_viewer', gTxt('ied_plugin_docs'), $namedLink) . ' ]' : '';

        $msgpop = '<div id="ied_plugin_msgpop"><input type="button" class="publish" value="'.gTxt('ok').'" onclick="ied_plugin_toggle_msgpop(\'0\');" /><h2>'.gTxt('ied_plugin_msgpop_lbl').'</h2><span class="ied_plugin_msgpop_content"></span></div>';

        $newname = fInput('text', 'newname', $name, '', '', '', INPUT_REGULAR);
        $author_widget = fInput('text', 'author', $author, '', '', '', INPUT_REGULAR);
        $author_uri_widget = fInput('text', 'author_uri', $author_uri, '', '', '', INPUT_REGULAR);
        $version_widget = fInput('text', 'version', $version, 'input-small', '', '',INPUT_SMALL) .sp. (($editfile) ? checkbox('rename_file', '1', 0, '','rename_file') . ' <label for="rename_file">'.gTxt('ied_plugin_rename_file').'</label>' : checkbox('restore_point', '1', 0, '','restore_point') . ' <label for="restore_point">'.gTxt('ied_plugin_restore_point').'</label>');
        $description_widget = fInput('text', 'description', $description, 'input-xlarge', '', '', INPUT_REGULAR);
        $codeblock = '<textarea name="code" id="plugin_editor" rows="'.INPUT_REGULAR.'" class="code codepress php" maxlength="'.$this->ied_plugin_globals['size_code'].'">'.txpspecialchars($code).'</textarea><div class="ied_plugin_info_bar"><span>'.gTxt('ied_plugin_jump_to_line').'</span><input type="text" id="ied_plugin_jumpToLine" size="5" maxlength="6" /><span class="ied_plugin_charsRemain"></span></div>';
        $help_widget = '<textarea name="help" id="plugin_help" rows="'.INPUT_REGULAR.'" class="mceEditor" maxlength="'.$this->ied_plugin_globals['size_help'].'">'.txpspecialchars($help).'</textarea><div class="ied_plugin_info_bar"><span class="ied_plugin_charsRemain"></span></div>';
        $css_widget = ($styleblock) ? '<textarea name="css" id="plugin_help_css" rows="'.INPUT_MEDIUM.'" class="code" maxlength="'.$this->ied_plugin_globals['size_css'].'">'.txpspecialchars($css).'</textarea><div class="ied_plugin_info_bar"><span class="ied_plugin_charsRemain"></span></div>' : '';
        $plugstatus = (!$editfile) ? sp.sp.checkbox('status',1,$status, '','status'). ' <label for="status">'.gTxt('ied_plugin_enable').'</label>' : '';

        $plugtypes = array(
            '0' => gTxt('ied_plugin_type_0'),
            '1' => gTxt('ied_plugin_type_1'),
            '2' => gTxt('ied_plugin_type_2'),
            '3' => gTxt('ied_plugin_type_3'),
            '4' => gTxt('ied_plugin_type_4'),
            '5' => gTxt('ied_plugin_type_5'),
        );
        $plugtype = selectInput('type', $plugtypes, $type, false, '', 'type');

        $plugorder = selectInput('load_order', $orders, $load_order, 0, 0);
        $flaglist = checkbox(
                'flags[]',
                PLUGIN_HAS_PREFS,
                (($flags & PLUGIN_HAS_PREFS) ? 1 : 0),
                '',
                'ied_plugin_flag_has_prefs'
            )
            .n. '<label for="ied_plugin_flag_has_prefs">' . gTxt('ied_plugin_flag_has_prefs') . '</label>'
            .n. checkbox(
                'flags[]',
                PLUGIN_LIFECYCLE_NOTIFY,
                (($flags & PLUGIN_LIFECYCLE_NOTIFY) ? 1 : 0),
                '',
                'ied_plugin_flag_lifecycle_notify'
            )
            .n. '<label for="ied_plugin_flag_lifecycle_notify">' . gTxt('ied_plugin_flag_lifecycle_notify') . '</label>';

        $sub = graf(fInput('submit', '', gTxt('save'), 'publish', '', '', '', '', 'ied_editSave'), array('class' => 'txp-save'));
        $codesub = (!$editfile) ? '<a class="navlink" name="ied_plugin_code_save" id="ied_plugin_code_save">' . gTxt('ied_plugin_code_save') . '</a>' : '';
        $metasub = (!$editfile) ? '<a class="navlink" name="ied_plugin_meta_save" id="ied_plugin_meta_save">' . gTxt('ied_plugin_meta_save') . '</a>' : '';

        // Language info. ied_visible_langs is the user's choice of which ones they want to see available.
        // ied_available_langs is the list of actual, currently-installed langs.
        $theLang = get_pref('language');
        $string_count = ($tp_pfx) ? safe_rows('lang, count(*) as count', 'txp_lang', "name like '".$tp_pfx."%' group by lang") : array();
        $ied_listlangs = get_pref('ied_plugin_lang_choose', 'installed');
        $ied_visible_langs = self::lang_list($ied_listlangs);
        $ied_available_langs = ($ied_listlangs == 'installed') ? $ied_visible_langs : self::lang_list('installed');
        $dflt_lang = get_pref('ied_plugin_lang_default', $theLang);
        $dflt_lang = array_key_exists($dflt_lang, $ied_visible_langs) ? $dflt_lang : $theLang;
        $dflt_lang_string_count = 0;

        foreach ($string_count as $str_totals) {
            if (isset($ied_visible_langs[$str_totals['lang']])) {
                $ied_visible_langs[$str_totals['lang']] .= ' ['.$str_totals['count'].']';
                if ($str_totals['lang'] === $dflt_lang) {
                    $dflt_lang_string_count = $str_totals['count'];
                }
            }
        }
        $langsel = selectInput('ied_plugin_tp_lang', $ied_visible_langs, $dflt_lang, '', '', 'ied_plugin_tp_lang')
            .fInput('button', 'ied_plugin_tp_refresh', gTxt('ied_plugin_load'), '', '', '', '', '', 'ied_plugin_tp_refresh');

        $preselected = do_list(get_pref('ied_plugin_lang_selected', ''));

        $op_langs[] = '<select name="ied_plugin_tp_oplangs" id="ied_plugin_tp_oplangs" multiple="multiple"><option value=""></option>';
        foreach ($ied_available_langs as $langcode => $alang) {
            $sel = in_array($langcode, $preselected) ? ' selected="selected"' : '';
            $op_langs[] = '<option value="'.$langcode.'"'.$sel.'>'.$alang.'</option>';
        }
        $op_langs[] = '</select>';

        $tp_strings = array();
        $tp_rows = $this->textpack_grab($dflt_lang, $tp_pfx);
        foreach ($tp_rows as $tp_string) {
            $apsel = selectInput('ied_plugin_tp_event', array('admin' => gTxt('admin'), 'public' => gTxt('public'), 'common' => gTxt('both')), ($tp_string['event'] == 'public' ? 'public' : ($tp_string['event'] == 'common' ? 'common' : 'admin')) );
            $tp_strings[] = '<li>'.fInput('text', 'textpack_'.$tp_string['name'], $tp_string['data']).' '.$apsel.' <label>'.$tp_string['name'].'</label>'.'</li>';
        }


        $err_prefix = gTxt('ied_plugin_syntax_err');
        $codesave_ok = gTxt('ied_plugin_code_saved');
        $phpdoc = '';

        // TODO
        $classFinder = '/class[\s\n]+(\w+)[\s\n]*\{?(function[\s\n]+(\w+)[\s\n]*\(.*\)[\s\n]*\{?)*/';
        $functionFinder = '/function[\s\n]+(\w+)[\s\n]*\(.*\)[\s\n]*\{?/';
        preg_match_all($functionFinder, $code , $functionArray);
        // selectInput requires key and value to be the same
    //dmp($functionArray);
        $fnArray = array();
    /*
        foreach ($functionArray[1] as $key => $val) {
            $fnArray[$val] = $functionArray[1][$key];
        }
        $phpdoc = selectInput('ied_plugin_to_phpdoc', $fnArray, '', false, '', 'ied_plugin_to_phpdoc')
            .'<a class="navlink" name="ied_plugin_btn_phpdoc" id="ied_plugin_btn_phpdoc">' . gTxt('ied_plugin_php_doc') . '</a>';
    */
        $phpdoc = '';
        $tabCount = $tabActive = 0;
        $selectedTab = get_pref('pane_' . $this->ied_pc_event . '_visible');
        $tokenSuffix = $this->ied_pc_event . form_token() . get_pref('blog_uid');
        $panelSet = array(
            0 => 'meta',
            1 => 'code',
            2 => 'pack',
            3 => 'docs',
            );

        $switcherList = array();

        foreach ($panelSet as $tabId => $panel) {
            $switcherList[] = '<li><a href="#options_group_'.$panel.'" data-txp-pane="'.$panel.'" data-txp-token="' . md5($panel.$tokenSuffix).'">' . gTxt('ied_plugin_'.$panel.'_legend') . '</a></li>';
            if ($panel === $selectedTab) {
                $tabActive = $tabCount;
            }

            $tabCount++;
        }

        echo
            n. form(
                '<div class="txp-layout">'
                .n. '<div class="txp-layout-2col">'
                .n. hed(gTxt('ied_plugin_edit', array('{name}' => $name, '{version}' => $version)), 1, array('class' => 'txp-heading'))
                .n. '</div>'
                .n. '<div class="txp-layout-2col">'
                .n. sLink($this->ied_pc_event, '', gTxt('ied_plugin_list'), 'ied_plugin_link')
                .n. '</div>'
                .n. '<div class="txp-layout-4col-alt" id="ied_edit_switcher" role="region">'
                .n. '<section class="txp-details" id="all_options" aria-labelledby="all_options-label">'
                .n. '<h3 id="all_options-label">Panels</h3>'
                .n. '<div role="group">'
                .n. '<ul class="switcher-list">'
                .implode(n, $switcherList)
                .n. '</ul>'
                .n. '</div>'
                .n. '</section>'
                .n. $sub
                .n. '<section class="txp-prefs-group" id="options_group_dist" aria-labelledby="options_group_dist-label">'
                .n. hed(gTxt('ied_plugin_utils_legend'), 2, array('id' => 'options_group_dist-label'))
                .n. graf(gTxt('ied_plugin_utils_legend_extra'), array('class' => 'warning'))
                .n. (($distblock) ? '<div>' . $distribution . '</div>' : '')
                .n. '<div class="txp-form-field txp-form-field-textarea">'
                .n. '<div class="txp-form-field-label"><label for="ied_plugin_tp_oplangs">' . gTxt('ied_plugin_lang_choose') . '</label></div>'
                .n. '<div class="txp-form-field-value">' . implode(n, $op_langs) . '</div>'
                .n. '</div>'
                .n. '<ul>'
                .n. '<li>' . $slink . '</li>'
                .n. '<li>' . $sziplink . '</li>'
                .n. '<li>' . $stxtlink . '</li>'
                .n. '<li>' . $sphplink . '</li>'
                .n. '</ul>'
                .n. '</section>'
                .n. '</div>'

                .n. '<div class="txp-layout-4col-3span" id="ied_edit_content" role="region">'
                .n. '<section class="txp-prefs-group" id="options_group_meta" aria-labelledby="options_group_meta-label">'
                .n. hed(gTxt('ied_plugin_meta_legend'), 2, array('id' => 'options_group_meta-label'))
                .n. '<span class="ied_plugin_edit_toolbar">' . $metasub . '</span>'
                .n. '<div class="txp-form-field">'
                .n. '<div class="txp-form-field-label"><label for="newname">' . gTxt('name') . '</label></div>'
                .n. '<div class="txp-form-field-value">' . $newname . '</div>'
                .n. '</div>'
                .n. '<div class="txp-form-field">'
                .n. '<div class="txp-form-field-label"><label for="version">' . gTxt('version') . '</label></div>'
                .n. '<div class="txp-form-field-value">'
                .n. $version_widget
                .n. $plugstatus
                .n. (($filename) ? tag(sp.sp.'('.$filename.')','span',' style="color:gray;"').hInput('filename', $filename) : '')
                .n. '</div>'
                .n. '</div>'
                .n. '<div class="txp-form-field">'
                .n. '<div class="txp-form-field-label"><label for="description">' . gTxt('description') . '</label></div>'
                .n. '<div class="txp-form-field-value">' . $description_widget . '</div>'
                .n. '</div>'
                .n. '<div class="txp-form-field">'
                .n. '<div class="txp-form-field-label"><label for="author">' . gTxt('author') . '</label></div>'
                .n. '<div class="txp-form-field-value">' . $author_widget . '</div>'
                .n. '</div>'
                .n. '<div class="txp-form-field">'
                .n. '<div class="txp-form-field-label"><label for="author_uri">' . gTxt('website') . '</label></div>'
                .n. '<div class="txp-form-field-value">' . $author_uri_widget . '</div>'
                .n. '</div>'
                .n. '<div class="txp-form-field">'
                .n. '<div class="txp-form-field-label"><label for="type">' . gTxt('ied_plugin_type') . '</label></div>'
                .n. '<div class="txp-form-field-value">' . $plugtype . '</div>'
                .n. '</div>'
                .n. '<div class="txp-form-field">'
                .n. '<div class="txp-form-field-label"><label>' . gTxt('ied_plugin_flags')  . '</label></div>'
                .n. '<div class="txp-form-field-value">' . $flaglist . '</div>'
                .n. '</div>'
                .n. '<div class="txp-form-field">'
                .n. '<div class="txp-form-field-label"><label>' . gTxt('ied_plugin_load_order') . gTxt('ied_plugin_load_order_help') . '</label></div>'
                .n. '<div class="txp-form-field-value">' . $plugorder . '</div>'
                .n. '</div>'
                .n. '</section>'

                .n. '<section class="txp-prefs-group" id="options_group_code" aria-labelledby="options_group_code-label">'
                .n. hed(gTxt('ied_plugin_code_legend'), 2, array('id' => 'options_group_code-label'))
                .n. '<span class="ied_plugin_edit_toolbar">' . $msgpop . $phpdoc . sp . $codesub . '</span>'
                .n. '<div class="txp-form-field txp-form-field-textarea">'
                .n. '<div class="txp-form-field-label"><label for="plugin_editor">PHP</label></div>'
                .n. '<div class="txp-form-field-value">' . $codeblock . '</div>'
                .n. '</div>'
                .n. '</section>'

                .n. '<section class="txp-prefs-group" id="options_group_pack" aria-labelledby="options_group_pack-label">'
                .n. hed(gTxt('ied_plugin_pack_legend'), 2, array('id' => 'options_group_pack-label'))
                .n. '<div class="txp-form-field">'
                .n. '<div class="txp-form-field-label"><label for="ied_plugin_tp_prefix">' . gTxt('ied_plugin_tp_prefix') . '</label></div>'
                .n. '<div class="txp-form-field-value">'
                .n. fInput('text', 'ied_plugin_tp_prefix', $tp_pfx, '', '', '', '', '', 'ied_plugin_tp_prefix')
                .n. $langsel
                .n. fInput('hidden', 'ied_plugin_tp_lang_dflt', $dflt_lang, '', '', '', '', '', 'ied_plugin_tp_lang_dflt')
                .n. '</div>'
                .n. '</div>'
                .n. '<div class="txp-form-field">'
                .n. '<div class="txp-form-field-label"><label>' . gTxt('ied_plugin_tp_populate')  . '</label></div>'
                .n. '<div class="txp-form-field-value">'
                .n. fInput('text', 'ied_plugin_tp_populate', '', '', '', '', '', '', 'ied_plugin_tp_populate')
                .n. '<button id="ied_plugin_tp_load">' . gTxt('go') . '</button>'
                .n. '<span id="ied_plugin_tp_load_count"></span>'
                .n. '</div>'
                .n. '</div>'
                .n. '<a href="#" id="ied_plugin_add_string" class="txp-button">+</a>'
                .n. '<ul>'
                .n. implode(n, $tp_strings)
                .n. '</ul>'
                .n. '</section>'

                .n. '<section class="txp-prefs-group" id="options_group_docs" aria-labelledby="options_group_docs-label">'
                .n. hed(gTxt('ied_plugin_docs_legend') . n . $vhelplinkfull, 2, array('id' => 'options_group_docs-label'))
                .n. '<div class="txp-form-field txp-form-field-textarea">'
                .n. '<div class="txp-form-field-label"><label for="plugin_help">' . gTxt('text') . '</label></div>'
                .n. '<div class="txp-form-field-value">' . $help_widget . '</div>'
                .n. '</div>'
                .n. (($styleblock)
                        ? '<div class="txp-form-field txp-form-field-textarea">'
                            . '<div class="txp-form-field-label"><label for="plugin_help_css">' . gTxt('css') . '</label></div>'
                            . '<div class="txp-form-field-value">' . $css_widget . '</div>'
                            . '</div>'
                        : '')
                .n. '</section>'
                .n. '</div>'
                .n. sInput('save')
                .n. eInput($this->ied_pc_event)
                .n. hInput('name',$name)
            , '', '', 'post', 'ied-edit-form').
            script_js(<<<EOJS
var selectedTab = '{$tabActive}';
var iedPluginGroup = $('.ied-edit-form');
var iedPluginTabs = iedPluginGroup.find('.switcher-list li');

iedPluginGroup.tabs({active: selectedTab}).removeClass('ui-widget ui-widget-content ui-corner-all').addClass('ui-tabs-vertical');
iedPluginGroup.find('.switcher-list').removeClass('ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all');
iedPluginTabs.removeClass('ui-state-default ui-corner-top');
iedPluginGroup.find('.txp-prefs-group').removeClass('ui-widget-content ui-corner-bottom');

iedPluginTabs.on('click', 'a', function(ev) {
    var me = $(this);
    sendAsyncEvent({
            event   : 'pane',
            step    : 'tabVisible',
            pane    : me.data('txp-pane'),
            origin  : textpattern.event,
            token   : me.data('txp-token')
        });
});

var ied_plugin_tp_total = 0;

jQuery.fn.selectRange = function(start, end) {
    return this.each(function() {
        if (this.setSelectionRange) {
            this.focus();
            this.setSelectionRange(start, end);
        } else if (this.createTextRange) {
            var range = this.createTextRange();
            range.collapse(true);
            range.moveEnd('character', end);
            range.moveStart('character', start);
            range.select();
        }
    });
};

Array.prototype.unique = function() {
    var r = new Array();
    o:for (var i = 0, n = this.length; i < n; i++) {
        for (var x = 0, y = r.length; x < y; x++) {
            if (r[x]==this[i]) {
                continue o;
            }
        }
        r[r.length] = this[i];
    }

    return r;
};

function ied_goToLine()
{
    var line = parseInt(jQuery('#ied_plugin_jumpToLine').val());
    var ied_ed = jQuery('#plugin_editor');
    var ied_edd = document.getElementById('plugin_editor'); // Dunno how to convert a jQuery obj back to DOM
    var lines = ied_ed.val().split('\\n');
    var numchars = 0;
    var count = 0;
    var findstr = '';
    jQuery.each(lines, function () {
        count++;
        if (count >= line) {
            findstr = this;


            return false;
        }
        numchars += (this.length)+2; // Don't ask. +2 is something to do with line endings I think
    });

    // Find the line containing the string we found. Start counting from the line before.
    // Those pesky line endings come into play again so we need to subtract the number
    // of lines found from the start character position *shrug*
    start = ied_ed.val().indexOf(findstr, numchars-count);
    start = (findstr == '') ? start+1 : start;
    end = start+findstr.length;
    ied_ed.selectRange(end-1, end);

    if (document.createEvent) {
        var ied_theCode = ied_ed.val().charCodeAt(end-1);
        if (window.KeyEvent) {
            var ev = document.createEvent('KeyEvents');
            ev.initKeyEvent('keypress', false, true, window, false, false, false, false, 0, ied_theCode);
        } else {
            var ev = document.createEvent('UIEvents');
            ev.initUIEvent('keypress', false, true, window, 0);
            ev.keyCode = ied_theCode;
        }
        ied_edd.dispatchEvent(ev); // cause scroll to cursor by replacing last char with itself
    }
    ied_ed.selectRange(start, end);

    return false;
}
function ied_plugin_toggle_msgpop(state)
{
    var obj = jQuery("#ied_plugin_msgpop");
    if (state != undefined) {
        if (state == 1) {
            obj.show('normal');
        } else {
            obj.hide('normal');
        }
    } else {
        obj.toggle('normal');
    }
}
function ied_plugin_rtrim(str, chars)
{
    chars = chars || "\s";

    return str.replace(new RegExp("[" + chars + "]+$", "g"), "");
}
function ied_plugin_update_tp_count()
{
    var tp_count = tp_warns = tp_has_content = 0;

    jQuery('#options_group_pack ul li').each(function() {
        var self = jQuery(this);
        tp_count++;
        if (self.find('input').val() !== '') {
            tp_has_content++;
        }
        if (self.find('label').hasClass('warning')) {
            tp_warns++;
        }
    });
    jQuery('#ied_plugin_tp_count').empty().append('(' +tp_count+ ' | ' +tp_has_content+ ' | ' +tp_warns+ ')');
    jQuery('#ied_plugin_tp_lang option').find(':selected').data('string-count', tp_has_content);

    // Update the global var for use when loading strings
    ied_plugin_tp_total = tp_count;
}

jQuery(function () {
    curh = getCookie('ied_plugin_edheight');
    curh = (curh == null) ? '480' : curh;
    jQuery('textarea[maxlength]').keyup(function () {
        var max = parseInt(jQuery(this).attr('maxlength'));
        if (jQuery(this).val().length > max) {
            jQuery(this).val(jQuery(this).val().substr(0, jQuery(this).attr('maxlength')));
        }
        jQuery(this).parent().find('.ied_plugin_charsRemain').html('Chars remaining: '+ (max - jQuery(this).val().length));
    });
    jQuery('textarea[maxlength]').keyup();
    jQuery('#ied_plugin_jumpToLine').keydown(function (e) {
        var code = (e.keyCode ? e.keyCode : e.which);
        if (code == 13) {
            e.preventDefault();
            e.stopPropagation();
            ied_goToLine();


            return false;
        }
    });

    // Store the prefix
    jQuery('#ied_plugin_tp_prefix').blur(function () {
        var pfx = jQuery(this).val();
        sendAsyncEvent(
        {
            event: textpattern.event,
            step: 'set_tp_prefix',
            plugin: '{$name}',
            prefix: pfx
        });
    });

    // Find all occurrences of gTxt('something')
    jQuery('#plugin_editor, #ied_plugin_tp_prefix').blur(function () {
        var ied_tp_pfx = jQuery('#ied_plugin_tp_prefix').val();
        if (ied_tp_pfx != '') {
            var ied_gtxt_re = /gTxt\([\'\"]([a-zA-Z0-9_]*?)[\"\'][,\)]/gi;
            var ied_tp_ta = jQuery('#plugin_editor').val().replace(/\s*/g,''); // Strip spaces to make lookups easier
            var ied_tp_items = ied_tp_ta.match(ied_gtxt_re);

            // if JS RegExp captured parenthical expressions in global searches or it was easy to inject variables
            // into new RegExp() calls, this loop could be avoided
            var ied_tp_used = [];
            for (var idx = 0; idx < ied_tp_items.length; idx++) {
                var pos = ied_tp_items[idx].lastIndexOf("'");
                pos = (pos == -1) ? ied_tp_items[idx].lastIndexOf('"') : pos;
                tpstr = ied_tp_items[idx].substr(6,pos-6);
                if (tpstr.indexOf(ied_tp_pfx) == 0) {
                    ied_tp_used[ied_tp_used.length] = tpstr;
                }
            }

            ied_tp_used = ied_tp_used.unique();

            // List of all current textpack strings in use (as of last Save operation)
            var ied_tp_curr = [];
            jQuery('#options_group_pack ul label').each(function () {
                ied_tp_curr[ied_tp_curr.length] = jQuery(this).text();
            });

            // Iterate over current array and check if each name is in the used textpack item list.
            // If it is, remove it from the final list.
            for (var idx = 0; idx < ied_tp_curr.length; idx++) {
                if ((pos = jQuery.inArray(ied_tp_curr[idx], ied_tp_used)) > -1) {
                    ied_tp_used.splice(pos, 1);
                    jQuery('#options_group_pack ul label:contains('+ied_tp_curr[idx]+')').toggleClass('warning', false).next(".destroy").remove();
                } else {
                    setclass = 1;
                    jQuery('#options_group_pack ul label:contains('+ied_tp_curr[idx]+')').toggleClass('warning', true).next(".destroy").remove().end().after('<a href="#" class="destroy"><span class="ui-icon ui-icon-close">Delete</span></a>');
                }
            }
            // For each remaining item that has been used, add an input box
            // TODO: i18n the select options
            for (var idx = 0; idx < ied_tp_used.length; idx++) {
                jQuery('#options_group_pack ul').prepend('<li><input type="text" name="textpack_'+ied_tp_used[idx]+'" value="" /> <select name="ied_plugin_tp_event"><option value="admin">Admin</option><option value="public">Public</option><option value="common">Both</option></select> <label>'+ied_tp_used[idx]+'</label></li>');
            }
            ied_plugin_update_tp_count();
        }
    }).blur();

    // Handle adding new strings manually
    jQuery('#ied_plugin_add_string').click(function (ev) {
        jQuery('#options_group_pack ul').before('<div id="ied_plugin_new_container"><label>'+jQuery('#ied_plugin_tp_prefix').val()+'_<input type="text" name="ied_plugin_tp_newname" id="ied_plugin_tp_newname" value="" /></label></div>');
        jQuery('#ied_plugin_tp_newname').focus();
        ev.preventDefault();
    });
    jQuery(document).on('blur', '#ied_plugin_tp_newname', function () {
        var newname = ied_plugin_rtrim(jQuery('#ied_plugin_tp_prefix').val()+'_'+jQuery('#ied_plugin_tp_newname').val(), '_');
        var newok = true;
        jQuery('#options_group_pack ul li label').each(function () {
            if (jQuery(this).text() == newname) {
                jQuery('#ied_plugin_tp_newname').css('color', '#E00');
                newok = false;
            }
        });
        // TODO: i18n select option text
        if (newok) {
            jQuery('#options_group_pack ul').prepend('<li><input type="text" name="textpack_'+newname+'" value="" /> <select name="ied_plugin_tp_event"><option value="admin">Admin</option><option value="public">Public</option><option value="common">Both</option></select> <label>'+newname+'</label></li>');
            jQuery('#ied_plugin_new_container').remove();
            jQuery('input[name="textpack_'+newname+'"]').focus();
        }
        ied_plugin_update_tp_count();
    });

    // Initialise the generic AJAX error handler
    jQuery('.ied_editForm').ajaxError(function (event, request, settings) {
        var xhr = jQuery(request.responseText);

        // phpdoc generation barfed
        if (settings.data.indexOf('step=ied_plugin_generate_phpdoc') > -1) {
            var msgContent = jQuery("#ied_plugin_msgpop .ied_plugin_msgpop_content");
            status = xhr.find('http-status').attr('value')
            if (status == '200 OK') {
                msgContent.append(xhr.find('ied_plugin_phpdoc').attr('value'));
            } else if (status == '501 Not Implemented') {
                msgContent.append(xhr.find('error_msg').attr('value'));
            }
            ied_plugin_toggle_msgpop('1');
        }

        // code save barfed
        if (settings.data.indexOf('step=ied_plugin_code_save') > -1) {
            var msg = xhr.find('ied_plugin_msg').attr('value');
            var line = xhr.find('ied_plugin_err_line').attr('value');
            jQuery('#ied_plugin_jumpToLine').val(line);
            ied_goToLine();
            var codeobj = jQuery("#plugin_editor");
            codeobj.css({'opacity': '.75'}); // Reduced opacity as a visual cue that something's wrong
            eval(msg); // bleurgh!
        }
    });

    // Handle 'x' button
    jQuery(document).on('click', '.destroy', function (event) {
        var elem = jQuery(this).prev('label');
        var tp_lbl = elem.text();

        sendAsyncEvent(
        {
            event: textpattern.event,
            step: 'textpack_del',
            ied_tp_lbl: tp_lbl
        });

        elem.parent().remove();
        event.preventDefault();
        ied_plugin_update_tp_count();
    });

    // Save textpack string to database
    function ied_plugin_tp_save(event)
    {
        var elem = jQuery(this);
        var isSel = elem.is('select');
        var tp_lbl = elem.nextAll('label').text();
        var tp_str = (isSel) ? elem.prevAll('input').val() : elem.val();
        var tp_ev = (isSel) ? elem.val() : elem.nextAll('select').val();
        var tp_evt = (tp_ev=='public' || tp_ev=='common') ? tp_ev : jQuery('#ied_plugin_tp_prefix').val();
        var tp_lng = jQuery('#ied_plugin_tp_lang').val();
        var tp_own = jQuery('#ied_plugin_tp_prefix').val();

        sendAsyncEvent(
        {
            event: textpattern.event,
            step: 'textpack_save',
            ied_tp_evt: tp_evt,
            ied_tp_lbl: tp_lbl,
            ied_tp_lng: tp_lng,
            ied_tp_str: tp_str,
            ied_tp_own: tp_own
        });
    }

    // Handle saving textpack string
    jQuery(document).on('blur', '#options_group_pack ul li input', ied_plugin_tp_save);
    jQuery(document).on('change', '#options_group_pack ul li select', ied_plugin_tp_save);

    // Handle language change.
    jQuery("#ied_plugin_tp_lang").change(function (event) {
        jQuery('#ied_plugin_tp_load_count').empty().show();

        var tp_lng = jQuery(this).val();
        var tp_dflt = jQuery('#ied_plugin_tp_lang_dflt').val();
        var sel = '#options_group_pack ul li';
        var numStrings = sel.length;
        var numFetched = 0;

        jQuery(sel).each(function () {
            var obj = jQuery(this);
            var tp_lbl = obj.find('label').text();
            var tp_dest = obj.find('input');

            sendAsyncEvent(
            {
                event: textpattern.event,
                step: 'textpack_get',
                ied_tp_lbl: tp_lbl,
                ied_tp_lng: tp_lng,
                ied_tp_dflt: tp_dflt
            }, function (data) {
                numFetched++;
                var theVal = data.ied_plugin_tp_string;
                var xl8str = data.ied_plugin_tp_dflt;

                tp_dest.val(theVal);

                if (xl8str == undefined || xl8str == '') {
                    obj.removeAttr('title');
                } else {
                    obj.attr('title', xl8str);
                }
                if (numFetched < ied_plugin_tp_total) {
                    jQuery('#ied_plugin_tp_load_count').text(numFetched + '/' + ied_plugin_tp_total);
                } else {
                    jQuery('#ied_plugin_tp_load_count').text('OK').hide('slow');
                    ied_plugin_update_tp_count();
                }
            },
            'json');
        });
    });

    // Current language refresh.
    jQuery('#ied_plugin_tp_refresh').click(function () {
        // Trigger the change event
        jQuery("#ied_plugin_tp_lang").change();
    });

    // Load textpack strings from plugin's custom gTxt()
    jQuery("#ied_plugin_tp_load").click(function (event) {
        var ied_fn = jQuery("#ied_plugin_tp_populate").val();


        jQuery('#options_group_pack ul li').each(function () {
            var obj = jQuery(this);
            var tp_lbl = obj.find('label').text();
            var tp_dest = obj.find('input');

            sendAsyncEvent(
            {
                event: textpattern.event,
                step: 'textpack_load',
                ied_tp_fn: ied_fn,
                ied_tp_lbl: tp_lbl
            }, function (data) {
                // Paste the returned string into the input box and save it by invoking blur()
                tp_dest.val(data.ied_plugin_tp_string).blur();
            },
            'json');
        });
        event.preventDefault();
    });

    // Handle saving metadata.
    jQuery("#ied_plugin_meta_save").click(function(event) {
        var msgarea = jQuery("#ied_plugin_messages");
        msgarea.empty();
        var metaobj = jQuery("#options_group_meta");
        var datablock = {};

        jQuery(metaobj).find('input[type="text"], select').each(function() {
            var obj = jQuery(this);
            var objid = obj.attr('name');
            datablock[objid] = obj.val();
        });

        jQuery(metaobj).find('input[type="radio"], input[type="checkbox"]').each(function() {
            var obj = jQuery(this);
            var objid = obj.attr('name').replace(/\[\]/, '');
            if (typeof datablock[objid] == 'undefined') {
                datablock[objid] = [];
            }
            if (obj.prop('checked') === true) {
                datablock[objid].push(obj.val());
            }
        });

        jQuery(metaobj).find('select').each(function() {
            var obj = jQuery(this);
            var objid = obj.attr('name');
            if (obj.prop('selected') === true) {
                datablock[objid] = obj.val();
            }
        });
        var plugin = '{$name}';

        metaobj.css('opacity', '0.4');
        sendAsyncEvent(
        {
            event: textpattern.event,
            step: 'meta_save',
            plugin: plugin,
            data: datablock
        }, function(data) {
            metaobj.css({'opacity': '1'});
            var msg = jQuery(data).find('ied_plugin_msg').attr('value');
            eval(msg); // yuk!
        });

        event.preventDefault();
    });

    // Handle saving code.
    jQuery("#ied_plugin_code_save").click(function (event) {
        var msgarea = jQuery("#ied_plugin_messages");
        msgarea.empty();
        var codeobj = jQuery("#plugin_editor");
        var codeblock = codeobj.val();
        var plugin = '{$name}';

        codeobj.css('opacity', '0.4');
        sendAsyncEvent(
        {
            event: textpattern.event,
            step: 'code_save',
            plugin: plugin,
            codeblock: codeblock
        }, function (data) {
            codeobj.css({'opacity': '1'});
            var msg = jQuery(data).find('ied_plugin_msg').attr('value');
            eval(msg); // yuk!
        });

        event.preventDefault();
    });

    // Handle generating phpdoc
    jQuery("#ied_plugin_btn_phpdoc").click(function (event) {
        var msgarea = jQuery("#ied_plugin_msgpop");
        var msgContent = jQuery("#ied_plugin_msgpop .ied_plugin_msgpop_content");
        msgContent.empty();
        var fnobj = jQuery("#ied_plugin_to_phpdoc");
        var fn = fnobj.val();
        var plugin = '{$name}';

        sendAsyncEvent(
        {
            event: textpattern.event,
            step: 'generate_phpdoc',
            plugin: plugin,
            fn: fn
        }, function (data) {
            msgContent.append(jQuery(data).find('ied_plugin_phpdoc').attr('value'));
            ied_plugin_toggle_msgpop('1');
        });

        event.preventDefault();
    });

    jQuery('#ied_plugin_tp_oplangs').change(function () {
        sel = jQuery('#ied_plugin_tp_oplangs option:selected').map(function () { return this.value }).get().join(', ');
        sendAsyncEvent(
        {
            event: textpattern.event,
            step: 'lang_set',
            ied_tp_langsel: sel
        });
    });

});
EOJS
            )
        .n. '</div>';
    }

    /**
     * Save the plugin to the DB or filesystem.
     */
    public function save()
    {
        extract(doSlash(gpsa(array('name','newname','filename','code','author','author_uri','version','description','help','css','status','type','load_order','rename_file','restore_point','ied_plugin_tp_prefix'))));
        $flags = gps('flags');

        list ($start_css, $end_css) = $this->make_markers("CSS", $this->ied_plugin_globals['css_start'], $this->ied_plugin_globals['css_end']);
        $extraMsg = $newfilename = $msg1 = $msg2 = '';
        $newname = trim($newname);
        if ($flags) {
            $flagout = 0;
            foreach ($flags as $flag) {
                $flagout |= $flag;
            }
            $flags = $flagout;
        }

        if (empty($newname)) {
            $msg1 = gTxt('ied_plugin_name_first');
            $msgType = E_ERROR;
        } else {
            if (empty($filename)) {
                $hout = array();
                $hout[0] = $help;
                if ($css) { $hout[1] = n.$start_css.n.$css.n.$end_css; }
                safe_update(
                    'txp_plugin',
                    "name='".$newname."',
                    status = ".intval($status).",
                    type = ".intval($type).",
                    author = '".$author."',
                    author_uri = '".$author_uri."',
                    version = '".$version."',
                    description = '".$description."',
                    help = '".implode('',$hout)."',
                    code = '".$code."',
                    flags = ".intval($flags).",
                    ".(($restore_point == 1)? "code_restore = '".$code."'," : '')."
                    load_order = ".$load_order,
                    "name = '".$name."'");
                $msg1 = gTxt('plugin_saved', array('{name}' => $newname));
                $msgType = '';
            } else {
                $pcd = get_pref('plugin_cache_dir');
                $dir = $pcd.DS;

                if (empty($pcd)) {
                    $filecontent = '';
                    $msg2 = gTxt('ied_plugin_cache_not_set');
                } else {
                    $ioo = get_pref('ied_plugin_output_order');
                    $oporder = (isset($ioo) && is_numeric($ioo)) ? $ioo : 0;
                    $textpack = $this->textpack_build($newname);
                    $helpchunk = $this->build_template('help', array($help, ' ')); // Use a space to force a CSS hunk in the file
                    $codechunk = $this->build_template('code', $code);
                    $filecontent = $this->build_template("preamble")
                        .$this->build_template("name", $newname)
                        .$this->build_template("html_help")
                        .$this->build_template("version", $version)
                        .$this->build_template("author", $author)
                        .$this->build_template("author_uri", $author_uri)
                        .$this->build_template("description", $description)
                        .$this->build_template("load_order", $load_order)
                        .$this->build_template("type", $type)
                        .$this->build_template("flags", $flags)
                        .$this->build_template("textpack", $textpack)
                        .$this->build_template("include")
                        .(($oporder == 0) ? $codechunk : $helpchunk)
                        .(($oporder == 1) ? $codechunk : $helpchunk)
                        .$this->build_template("postamble");
                    $msgType = '';
                }

                $filecontent = $this->make_array($filecontent);
                $metavars = array("name" => "$newname",
                                        "version" => "$version",
                                        "author" => "$author",
                                        "author_uri" => "$author_uri",
                                        "description" => "$description",
                                        "type" => "$type",
                                        "flags" => "$flags",
                                        "order" => "$load_order",
                                );
                $hunkvars = array("CODE" => doStrip(str_replace('\r\n','
',$code)), // newline workaround
                            "HELP" => doStrip(str_replace('\r\n','
',$help)),
                            "CSS" => doStrip(str_replace('\r\n','
',$css)),
                                );
                foreach ($metavars as $varname => $value) {
                    for ($idx = 0; $idx < count($filecontent); $idx++) {
                        if (strpos($filecontent[$idx], '$plugin[\''.$varname.'\']') === 0) {
                            $filecontent[$idx] = '$plugin[\''.$varname.'\'] = '.doQuote($value).';';
                            break;
                        }
                    }
                }
                foreach ($hunkvars as $varname => $hunk) {
                    list ($start_delim, $end_delim) = $this->make_markers($varname, $this->ied_plugin_globals['dlm_start'], $this->ied_plugin_globals['dlm_end']);
                    $start = array_search($start_delim, $filecontent) + 1;
                    $end = array_search($end_delim, $filecontent);
                    if (is_numeric($start) && is_numeric($end) && $end >= $start) {
                        array_splice($filecontent, $start, $end-$start, $hunk);
                    }
                }
                $filecontent = implode("\n", $filecontent);

                if ($filecontent) {
                    $fh = fopen($dir.$filename, 'w+');
                    fwrite($fh, $filecontent);
                    fclose($fh);
                }
                $msg1 = (empty($msg1)) ? gTxt('plugin_saved', array('{name}' => $newname)) : $msg1;
                $msgType = '';

                // Make new file if required
                if ($rename_file == 1) {
                    $fnames = $this->get_name($newname, $version);
                    $newfilename = $fnames[2];
                    $res = rename($dir.$filename, $dir.$newfilename);
                    $extraMsg = ($res) ? gTxt('ied_plugin_renamed') : gTxt('ied_plugin_rename_failed');
                }
            }

            // Store the plugin textpack prefix
            $this->set_tp_prefix($newname, $ied_plugin_tp_prefix);
        }
        if ($msg2) {
            $this->table($msg2);
        } else {
            // Check the plugin type matches the code used.
            $extraMsg .= ($this->admin_check($code, $type)) ? '' : strong(gTxt('ied_plugin_check_type'));
            $message = $msg1.$extraMsg;
            $this->edit(array($message, $msgType), $newfilename);
        }
    }

    /**
     * Export the plugin as a distributable txt file.
     */
    public function save_as_file()
    {
        if (gps('name')) {
            $name = gps('name');
            $rs = safe_row('description, author, author_uri, version, code, help, type, load_order, flags', 'txp_plugin', "name='".doSlash($name)."'");
            extract($rs);

            list($css,$help) = ($help) ? $this->extract_hunk($help, "CSS", "<!--|-->", true) : array('',$help);
        } elseif (gps('filename')) {
            $plugin = $this->read_file(get_pref('plugin_cache_dir').DS.gps('filename'));
            extract($plugin);
        }

        $zip = gps('type');
        if (gps('trim')==1) {
            $code=explode("\r\n",$code);
            $code=array_map('trim',$code);
            $code=implode("\r\n",$code);
        }

        // Get any textpack strings
        $textpack = $this->textpack_build($name);

        list ($start_css, $end_css) = $this->make_markers("CSS", $this->ied_plugin_globals['css_start'], $this->ied_plugin_globals['css_end']);
        $fnames = $this->get_name($name, $version);

        header('Content-type: text/plain');
        header('Content-Disposition: attachment; filename=' . (($zip === 'zip') ? $fnames[1] : $fnames[0]));

        $types = array('Public' , 'Admin/Public' , 'Library' , 'Admin', 'Admin/AJAX', 'Admin/Public/AJAX'); // No gTxt() because the template is English
        $plugin['name'] = $name;
        $plugin['author'] = $author;
        $plugin['author_uri'] = $author_uri;
        $plugin['version'] = $version;
        $plugin['description'] = $description;
        $plugin['code'] = $code;
        $plugin['type'] = $type;
        $plugin['order'] = $load_order;
        $plugin['flags'] = $flags;
    //  $plugin['allow_html_help'] = true;
    //  $plugin['help_raw'] = $help.$start_css.$css.$end_css;
        $plugin['help'] = $this->textile($name, $help, $css, $start_css, $end_css);
        $plugin['md5'] = md5( $plugin['code'] );
        if ($textpack) {
            $plugin['textpack'] = $textpack;
        }

        echo '# Name: '.$name.' v'.$version.' '.(($zip === 'zip') ? "(compressed)" : "").'
# Type: '.$types[$type].' plugin
# '.$description.'
# Author: '.$author.'
# URL: '.$author_uri.'
# Recommended load order: '.$load_order.'

# .....................................................................
# This is a plugin for Textpattern CMS - http://textpattern.com/
# To install: textpattern > admin > plugins
# Paste the following text into the \'Install plugin\' box:
# .....................................................................

'.(($zip === 'zip') ? chunk_split(base64_encode(gzencode(serialize($plugin))), 72) : chunk_split(base64_encode(serialize($plugin)), 72));

        die();
    }

    /**
     * Export the plugin as a plugin template PHP file.
     */
    public function save_as_php_file()
    {
        if (gps('name')) {
            $name = gps('name');
            $rs = safe_row("description, author, author_uri, version, code, help, type, load_order, flags", "txp_plugin", "name='".doSlash($name)."'");
            extract($rs);

            list($css,$help) = ($help) ? $this->extract_hunk($help, "CSS", "<!--|-->", true) : array('',$help);
        } elseif (gps('filename')) {
            $plugin=$this->read_file(get_pref('plugin_cache_dir').DS.gps('filename'));
            extract($plugin);
        }

        $ioo = get_pref('ied_plugin_output_order');
        $oporder = (isset($ioo) && is_numeric($ioo)) ? $ioo : 0;
        $fnames = $this->get_name($name, $version);

        header('Content-type: text/php');
        header('Content-Disposition: attachment; filename=' .$fnames[2]);

        $textpack = $this->textpack_build($name);
        $helpchunk = $this->build_template('help', array($help, $css));
        $codechunk = $this->build_template('code', str_replace("\r\n","\n",$code));

        echo $this->build_template('preamble').
            $this->build_template('name', $name).
            $this->build_template('html_help').
            $this->build_template('version', $version).
            $this->build_template('author', $author).
            $this->build_template('author_uri', $author_uri).
            $this->build_template('description', $description).
            $this->build_template('load_order', $load_order).
            $this->build_template('type', $type).
            $this->build_template('flags', $flags).
            $this->build_template('textpack', $textpack).
            $this->build_template('include').
            (($oporder == 0) ? $codechunk : $helpchunk).
            (($oporder == 1) ? $codechunk : $helpchunk).
            $this->build_template('postamble');

        die();
    }

    /**
     * Export only the textpacks from the plugin.
     */
    public function save_as_textpack()
    {
        if (gps('name')) {
            $name = $base_name = gps('name');
            $version = safe_field('version', "txp_plugin", "name='".doSlash($name)."'");
        } elseif (gps('filename')) {
            $name = gps('filename');
            $base_name = str_replace('.php', '', $name);
            $plugin=$this->read_file(get_pref('plugin_cache_dir').DS.gps('filename'));
            $version = $plugin['version'];
        }

        $langs = gps('lang');
        if (!$langs) {
            $langs = get_pref('ied_plugin_lang_selected', '');
        }

        $force = 0;
        if ($langs == '') {
            $langstr = 'all';
            $force = 1;
        } else {
            $langlist = do_list($langs);
            if (count($langlist) == 1) {
                $langstr = $langlist[0];
            } else {
                $country_codes = array();
                foreach ($langlist as $ln) {
                    $lparts = do_list($ln, '-');
                    $country_codes[] = $lparts[0];
                }
                $langstr = implode('+', array_unique($country_codes));
            }
        }
        $textpack = $this->textpack_build($base_name, $force);
        $fnames = $this->get_name($name, $version, $langstr);

        header('Content-type: text/html; charset=UTF-8');
        header('Content-Disposition: attachment; filename=' . $fnames[3]);
        echo $textpack;
        die();
    }

    /**
     * Create a plugin in standard template format.
     */
    public function build_template($prt, $val='')
    {
        $css = $help = '';
        if (is_array($val)) {
            $help = $val[0];
            $css = isset($val[1]) ? $val[1] : '';
            $val = '';
        }
        $template = array(
            "preamble" => '<?php'.n.n
                            .'// This is a PLUGIN TEMPLATE for Textpattern CMS.'.n.n
                            .'// Copy this file to a new name like abc_myplugin.php.  Edit the code, then'.n
                            .'// run this file at the command line to produce a plugin for distribution:'.n
                            .'// $ php abc_myplugin.php > abc_myplugin-0.1.txt'.n.n,
            "name" => '// Plugin name is optional.  If unset, it will be extracted from the current'.n
                            .'// file name. Plugin names should start with a three letter prefix which is'.n
                            .'// unique and reserved for each plugin author ("abc" is just an example).'.n
                            .'// Uncomment and edit this line to override:'.n
                            .'$plugin[\'name\'] = '.doQuote(doSlash($val)).';'.n.n,
            "html_help" => '// Allow raw HTML help, as opposed to Textile.'.n
                            .'// 0 = Plugin help is in Textile format, no raw HTML allowed (default).'.n
                            .'// 1 = Plugin help is in raw HTML.  Not recommended.'.n
                            .'# $plugin[\'allow_html_help\'] = 1;'.n.n,
            "version" => '$plugin[\'version\'] = '.doQuote($val).';'.n,
            "flags" => '// Plugin "flags" signal the presence of optional capabilities to the core plugin loader.'.n
                            .'// Use an appropriately OR-ed combination of these flags.'.n
                            .'// The four high-order bits 0xf000 are available for this plugin\'s private use'.n
                            .'if (!defined(\'PLUGIN_HAS_PREFS\')) define(\'PLUGIN_HAS_PREFS\', 0x0001); // This plugin wants to receive "plugin_prefs.{$plugin[\'name\']}" events'.n
                            .'if (!defined(\'PLUGIN_LIFECYCLE_NOTIFY\')) define(\'PLUGIN_LIFECYCLE_NOTIFY\', 0x0002); // This plugin wants to receive "plugin_lifecycle.{$plugin[\'name\']}" events'.n.n
                            .'$plugin[\'flags\'] = '.doQuote($val).';'.n.n,
            "textpack" => '// Plugin \'textpack\' is optional. It provides i18n strings to be used in conjunction with gTxt().'.n
                            .'// Syntax:'.n
                            .'// ## arbitrary comment'.n
                            .'// #@event'.n
                            .'// #@language ISO-LANGUAGE-CODE'.n
                            .'// abc_string_name => Localized String'.n.n
                            .(($val)
                                ? '$plugin[\'textpack\'] = <<<EOT'.n
                                    .$val.n
                                    .'EOT;'.n.n
                                : '/** Uncomment me, if you need a textpack'.n
                                    .'$plugin[\'textpack\'] = <<< EOT'.n
                                    .'#@admin'.n
                                    .'#@language en-gb'.n
                                    .'abc_sample_string => Sample String'.n
                                    .'abc_one_more => One more'.n
                                    .'#@language de-de'.n
                                    .'abc_sample_string => Beispieltext'.n
                                    .'abc_one_more => Noch einer'.n
                                    .'EOT;'.n
                                    .'**/'.n
                                    .'// End of textpack'.n.n),
            "author" => '$plugin[\'author\'] = '.doQuote(doSlash($val)).';'.n,
            "author_uri" => '$plugin[\'author_uri\'] = '.doQuote(doSlash($val)).';'.n,
            "description" => '$plugin[\'description\'] = '.doQuote(doSlash($val)).';'.n.n,
            "load_order" => '// Plugin load order:'.n
                            .'// The default value of 5 would fit most plugins, while for instance comment'.n
                            .'// spam evaluators or URL redirectors would probably want to run earlier'.n
                            .'// (1...4) to prepare the environment for everything else that follows.'.n
                            .'// Values 6...9 should be considered for plugins which would work late.'.n
                            .'// This order is user-overrideable.'.n
                            .'$plugin[\'order\'] = '.doQuote($val).';'.n.n,
            "type" => '// Plugin \'type\' defines where the plugin is loaded'.n
                            .'// 0 = public              : only on the public side of the website (default)'.n
                            .'// 1 = public+admin        : on both the public and admin side'.n
                            .'// 2 = library             : only when include_plugin() or require_plugin() is called'.n
                            .'// 3 = admin               : only on the admin side (no AJAX)'.n
                            .'// 4 = admin+ajax          : only on the admin side (AJAX supported)'.n
                            .'// 5 = public+admin+ajax   : on both the public and admin side (AJAX supported)'.n
                            .'$plugin[\'type\'] = '.doQuote($val).';'.n.n,
            "include" => 'if (!defined(\'txpinterface\'))'.n
                            .'        @include_once(\'zem_tpl.php\');'.n.n,
            "help" => 'if (0) {'.n
                            .'?>'.n
                            . (($css) ? '<!--'.n
                            .'# --- BEGIN PLUGIN CSS ---'.n
                            .$css.n
                            .'# --- END PLUGIN CSS ---'.n
                            .'-->'.n : '')
                            .'<!--'.n
                            .'# --- BEGIN PLUGIN HELP ---'.n
                            .$help.n
                            .'# --- END PLUGIN HELP ---'.n
                            .'-->'.n
                            .'<?php'.n
                            .'}'.n,
            "code" => '# --- BEGIN PLUGIN CODE ---'.n
                            .$val.n
                            .'# --- END PLUGIN CODE ---'.n,
            "postamble" => '?>',
        );

        return (array_key_exists($prt, $template) ? $template[$prt] : '');
    }

    /**
     * Create / upload / install a new plugin.
     */
    public function create()
    {
        extract(doSlash(gpsa(array('name', 'plugin_create', 'plugin_upload', 'plugin_install', 'ied_plugin_autoenable'))));

        if ($plugin_create) {
            $fname = '';
            if ($name == '') {
                $this->table(array(gTxt('ied_plugin_name_first'), E_ERROR));


                return;
            }
            if (strpos($name, ".php") !== false) {
                $fname = $name;
                $name = basename($name, ".php");
            }
            $exists = fetch('name', 'txp_plugin', 'name', $name);

            // MySQL defaults to set status=1 so we need to explicitly override this if this
            // is a fresh installation
            $state = ($ied_plugin_autoenable==1) ? 1 : 0;


            if (!$exists) {
                if ($fname) {
                    // Put plugin in cache dir by faking a POST submission and saving
                    $_POST['filename'] = $fname;
                    $_POST['newname'] = $name;
                    $_POST['status'] = 1; // Cache_dir plugins are always on so this setting is ignored
                    $_POST['type'] = 0;
                    $_POST['version'] = '0.1';
                    $_POST['load_order'] = 5;
                    $_POST['flags'] = 0;
                    $this->save();
                } else {
                    safe_insert("txp_plugin", "
                        name='$name',
                        status=$state,
                        type=0,
                        version='0.1',
                        load_order=5,
                        flags=0,
                        description='',
                        help='',
                        code='',
                        code_restore=''
                    ");
                    $this->edit(gTxt('ied_plugin_edit_new'), $name);
                }
            } else {
                $this->table(array(gTxt('plugin').' <strong>'.$name.'</strong> '.gTxt('already_exists'), E_ERROR));
            }

        } elseif ($plugin_upload) {
            list ($start_css, $end_css) = $this->make_markers("CSS", $this->ied_plugin_globals['css_start'], $this->ied_plugin_globals['css_end']);

            if (!$_FILES['thefile']['tmp_name']) {
                $this->table(array(gTxt('ied_plugin_choose_file'), E_ERROR));

                return;
            }

            $info = explode ('.',$_FILES['thefile']['name']);
            $lastpart = count($info)-1;
            $ext = $info[$lastpart];

            if ($ext == 'php') {
                $plugin = $this->read_file($_FILES['thefile']['tmp_name']);
//  $newname = (empty($plugin['name'])) ? basename($_FILES['thefile']['name'], '.php') : $plugin['name'];
                $newname = ($name) ? $name : doSlash($plugin['name']);

                if (empty($plugin['code'])) {
                    $plugin['code'] = file_get_contents($_FILES['thefile']['tmp_name']);
                }

                extract(doSlash($plugin));

                $md5 = md5($code);
                $version = ($version) ? $version : "0.1";
                $help = $help.(($css) ? n.$start_css.n.$css.n.$end_css : '');
                $exists = fetch('name', 'txp_plugin', 'name', $newname);

                // MySQL defaults to set status=1 so we need to explicitly override this if this
                // is a fresh installation
                $state = ($ied_plugin_autoenable==1) ? 'status=1,' : ($exists && ($ied_plugin_autoenable==2) ? '' : 'status=0,');

                if ($exists) {
                    // Note: status omitted so it retains its value
                    $rs = safe_update(
                        "txp_plugin",
                        "$state
                        type = ".intval($type).",
                        author = '$author',
                        author_uri = '$author_uri',
                        version = '$version',
                        description = '$description',
                        help = '$help',
                        code = '$code',
                        code_restore = '$code',
                        code_md5 = '$md5',
                        flags = ".intval($flags).",
                        load_order = ".intval($load_order),
                        "name = '$newname'"
                    );
                } else {
                    $rs = safe_insert(
                        "txp_plugin",
                        "name = '$newname',
                        $state
                        type = ".intval($type).",
                        author = '$author',
                        author_uri = '$author_uri',
                        version = '$version',
                        description = '$description',
                        help = '$help',
                        code = '$code',
                        code_restore = '$code',
                        code_md5 = '$md5',
                        flags = ".intval($flags).",
                        load_order = ".intval($load_order)
                    );
                }

                $msg = ($exists) ? gTxt('ied_plugin_updated', array('{name}' => $newname)) : gTxt('ied_plugin_uploaded', array('{name}' => $newname));
                $this->table($msg, $newname);

            } elseif ($ext === 'txt') {
                $plugin64 = file_get_contents($_FILES['thefile']['tmp_name']);
                $ret = $this->install($plugin64);

                if ($ret['err'] == '') {
                    $this->table($ret['msg'], $ret['nam']);
              } else {
                    $this->table(array($ret['msg'], $ret['err']));
                }
            }

        } elseif ($plugin_install) {
            $ret = $this->install(ps('plugin64'));
            if ($ret['err'] == '') {
                $this->table($ret['msg'], $ret['nam']);
          } else {
                $this->table(array($ret['msg'], $ret['err']));
            }
        }
    }

    /**
     * Install plugin from distributable txt file.
     *
     * Frankensteined shamelessly from include/txp_plugin.php
     *
     * @param  string $plugin The raw base64-encoded/gzipped plugin block
     */
    public function install($plugin = '')
    {
        if (strpos($plugin, '$plugin=\'') !== false) {
            @ini_set('pcre.backtrack_limit', '1000000');
            $plugin = preg_replace('@.*\$plugin=\'([\w=+/]+)\'.*@s', '$1', $plugin);
        }

        $plugin = preg_replace('/^#.*$/m', '', $plugin);

        if (trim($plugin)) {
            $plugin = base64_decode($plugin);

            if (strncmp($plugin, "\x1F\x8B", 2) === 0) {
                $plugin = gzinflate(substr($plugin, 10));
            }

            if ($plugin = @unserialize($plugin)) {
                if (is_array($plugin)) {
                    extract($plugin);

                    $type  = empty($type)  ? 0 : min(max(intval($type), 0), 5);
                    $order = empty($order) ? 5 : min(max(intval($order), 1), 9);
                    $flags = empty($flags) ? 0 : intval($flags);

                    $exists = fetch('name', 'txp_plugin', 'name', $name);

                    if (isset($help_raw) && empty($plugin['allow_html_help'])) {
                        // Default: help is in Textile format.
                        include_once txpath.'/lib/classTextile.php';
                        $textile = new Textile();
                        $help = $textile->TextileRestricted($help_raw, 0, 0);
                    }

                    // MySQL defaults to set status=1 so we need to explicitly override this if this
                    // is a fresh installation.
                    $ied_plugin_autoenable = ps('ied_plugin_autoenable');
                    $state = ($ied_plugin_autoenable==1) ? 'status=1,' : ($exists && ($ied_plugin_autoenable==2) ? '' : 'status=0,');

                    if ($exists) {
                        $rs = safe_update(
                           "txp_plugin",
                            "$state
                            type         = $type,
                            author       = '".doSlash($author)."',
                            author_uri   = '".doSlash($author_uri)."',
                            version      = '".doSlash($version)."',
                            description  = '".doSlash($description)."',
                            help         = '".doSlash($help)."',
                            code         = '".doSlash($code)."',
                            code_restore = '".doSlash($code)."',
                            code_md5     = '".doSlash($md5)."',
                            flags        = $flags",
                            "name        = '".doSlash($name)."'"
                        );

                    } else {

                        $rs = safe_insert(
                           "txp_plugin",
                           "name         = '".doSlash($name)."',
                            $state
                            type         = $type,
                            author       = '".doSlash($author)."',
                            author_uri   = '".doSlash($author_uri)."',
                            version      = '".doSlash($version)."',
                            description  = '".doSlash($description)."',
                            help         = '".doSlash($help)."',
                            code         = '".doSlash($code)."',
                            code_restore = '".doSlash($code)."',
                            code_md5     = '".doSlash($md5)."',
                            load_order   = '".$order."',
                            flags        = $flags"
                        );
                    }

                    if ($rs and $code) {
                        if (!empty($textpack)) {
                            install_textpack($textpack, false);
                        }

                        if (ps('ied_plugin_installopts') && ($flags & PLUGIN_LIFECYCLE_NOTIFY) ) {
                            load_plugin($name, true);
                            $message = callback_event("plugin_lifecycle.$name", 'installed');
                        }

                        if (empty($message)) $message = gTxt('plugin_installed', array('{name}' => $name));

                        return array('msg' => $message, 'err' => '', 'nam' => $name);
                    } else {
                        return array('msg' => gTxt('plugin_install_failed', array('{name}' => $name)), 'err' => E_ERROR);
                    }
                }
            }
        }

        return array('msg' => gTxt('bad_plugin_code'), 'err' => E_ERROR);
    }

    /**
     * Store the state of the togglable panes.
     */
    public function save_pane_state()
    {
        $panes = array('ied_plugin_tp_strings', 'ied_plugin_code', 'ied_plugin_docs', 'ied_plugin_meta', 'ied_plugin_utils', 'ied_plugin_cpanel', 'ied_plugin_dbplugs', 'ied_plugin_cacheplugs');
        $pane = gps('pane');
        if (in_array($pane, $panes)) {
            set_pref("pane_{$pane}_visible", (gps('visible') == 'true' ? '1' : '0'), 'ied_plugin', PREF_HIDDEN, 'yesnoradio', 0, PREF_PRIVATE);
            send_xml_response();
        } else {
            send_xml_response(array('http-status' => '400 Bad Request'));
        }
    }

    /**
     * Get plugin (file)name information.
     *
     * Returns an array of (file)names;
     *  1) the standard plugin
     *  2) the compressed plugin
     *  3) the PHP template
     *  4) the textpack
     */
    public function get_name($name, $version = '', $lang='')
    {
        $ied_plugin_prefs = $this->get_prefs();

        $op = get_pref('ied_plugin_output_sfile');
        $opc = get_pref('ied_plugin_output_sfilec');
        $opp = get_pref('ied_plugin_output_sfilep');
        $opt = get_pref('ied_plugin_output_sfilet');

        $out = array(
            ( (empty($op)) ? $ied_plugin_prefs['ied_plugin_output_sfile']['default'] : $op ),
            ( (empty($opc)) ? $ied_plugin_prefs['ied_plugin_output_sfilec']['default'] : $opc ),
            ( (empty($opp)) ? $ied_plugin_prefs['ied_plugin_output_sfilep']['default'] : $opp ),
            ( (empty($opt)) ? $ied_plugin_prefs['ied_plugin_output_sfilet']['default'] : $opt ),
        );

        $from = array('{name}', '{version}', '{lang}');
        $to = array($name, $version, $lang);

        foreach ($out as $fidx => $fname) {
            $fname = str_replace($from, $to, $fname);
            $out[$fidx] = sanitizeForFile($fname);
        }

        return $out;
    }

    /**
     * Parse a plugin in Standard Textpattern Template format.
     *
     * @param  string $filepath Full path to the file to be read
     */
    public function read_file($filepath)
    {
        $content = file($filepath);
        $justfile = basename($filepath);
        $parts = explode ('.',$justfile);
        $ext = array_pop($parts);
        $ext = ($ext==$justfile) ? '' : '.'.$ext; // Only assign an extension if one exists
        $source_lines = count($content);
        $commentblock = false;
        $in_textpack = false;
        $metadata = array(
                            'name'        => '',
                            'version'     => '',
                            'revision'    => '',
                            'author'      => '',
                            'author_uri'  => '',
                            'description' => '',
                            'order'       => '5',
                            'type'        => '',
                            'flags'       => '',
                            'textpack'    => '',
                        );
        for ($idx=0; $idx < $source_lines; $idx++) {
            $content[$idx] = rtrim($content[$idx]);

            // Bomb out if we reach the end of the definition area
            if (strpos( $content[$idx], 'if (!defined(\'txpinterface\')' ) === 0) {
                break;
            }
            if (strpos($content[$idx], '/*') === 0) {
                $commentblock = true;
                continue;
            }
            if ( (strpos($content[$idx], '*/') === 0) || (strpos($content[$idx], '**/') === 0) ) {
                $commentblock = false;
                continue;
            }

            if (strpos($content[$idx], 'EOT;') === 0) {
                $in_textpack = false;
                continue;
            }

            if ($in_textpack) {
                $metadata['textpack'] .= $content[$idx].n;
            }

            if (!$commentblock && strpos($content[$idx], '$plugin[') === 0) {
                // Found a plugin variable so extract it
                $parts = explode(" = ", $content[$idx]);
                $parts[0] = str_replace("'", "", $parts[0]); // Make the match easier!
                $semicolon = strpos($parts[1], ';');

                if ($semicolon !== false) {
                    $parts[1] = substr($parts[1], 0, $semicolon); // Ditto
                }

                preg_match("/plugin\[(.*)\]/", $parts[0], $var); // Extract just the variable name

                if (is_numeric($parts[1])) {
                    $parts[1] = "'".$parts[1]."'";
                }

                if (strpos($parts[1], '<<<') === false) {
                    preg_match("/.*'(.*)'.*/", $parts[1], $val); // Remove anything outside the quotes (e.g. $revision)

                    if (empty($val)) {
                        // Try unquoted - may be a constant or two.
                        preg_match("/(.*)/", $parts[1], $val);

                        if (strtoupper($val[1]) == $val[1]) {
                            // It's a constant so get its value
                            $val[1] = 0;
                            $constants = do_list($parts[1], '|');

                            foreach ($constants as $constant) {
                                $val[1] |= (defined($constant)) ? constant($constant) : 0;
                            }
                        }
                    }
                }

                if ($var[1] === 'revision' && isset($val[1]) && !empty($val[1])) {
                    $revparts = explode(' ', trim($val[1], '$ '));
                    $val[1] = $revparts[count($revparts)-1];
                    $val[1] = (empty($val[1])) ? '' : '.' .$val[1];
                }

                if ($var[1] === 'textpack') {
                    $in_textpack = true;
                    continue;
                }
                $metadata[$var[1]] = $val[1];
            }
        }

        $metadata['name'] = (empty($metadata['name'])) ? basename($justfile, $ext) : $metadata['name'];
        $metadata['load_order'] = $metadata['order'];
        $metadata['version'] .= $metadata['revision'];
        $metadata['help'] = $this->extract_hunk($content, 'HELP');
        $metadata['css']  = $this->extract_hunk($content, 'CSS' );
        $metadata['code'] = $this->extract_hunk($content, 'CODE');

        return $metadata;
    }

    /**
     * Pull out a chunk of text from the Standard Template Format.
     *
     * Ripped and modded from net-carver's zem_tpl template.
     *
     * @param  [type]  $content [description]
     * @param  [type]  $hunk    [description]
     * @param  string  $cmnt    [description]
     * @param  boolean $delete  [description]
     * @return [type]           [description]
     */
    public function extract_hunk($content, $hunk, $cmnt="#", $delete=false)
    {
        $dlm = explode("|", $cmnt);
        $dlmStart = $dlm[0];
        $dlmEnd = (isset($dlm[1])) ? $dlm[1] : '';
        $lines = $this->make_array($content);

        list ($start_delim, $end_delim) = $this->make_markers($hunk, $dlmStart, $dlmEnd);
        $start = array_search($start_delim, $lines) + 1;
        $end = array_search($end_delim, $lines);

        // Kludge to get round the delimiter change in v0.83
        if ($hunk == 'CSS' && $end === false) {
            $start_delim = str_replace('---', '***', $start_delim);
            $end_delim = str_replace('---', '***', $end_delim);
            $start = array_search($start_delim, $lines) + 1;
            $end = array_search($end_delim, $lines);
        }

        $extracted = array();
        if (count($lines) > 0 && is_numeric($start) && is_numeric($end) && $end > $start) {
            $extracted = array_slice($lines, $start, $end-$start);
            $lineNum = count($extracted)-1;
            while ($lineNum > 0 && trim($extracted[$lineNum--]) == "") {
                array_pop($extracted);
            }
            while (count($extracted) > 0 && trim($extracted[0]) == "") {
                array_shift($extracted);
            }
            if ($delete) {
                $chopped = array_splice($lines, $start-1, $end-$start+2, "");
            }
        }
        $remains = $lines;
        // Check if the CSS section has <style> tags around it; add them if not
        if ($hunk == "CSS") {
            $numrows = count($extracted);
            if ($numrows > 1) {
                if (strpos($extracted[$numrows-1], '</style>') === false) {
                    $extracted[] = '</style>';
                }
                if (strpos($extracted[0], '<style ') === false) {
                    array_unshift($extracted, '<style type="text/css">');
                }
            }
        }
        if ($delete) {
            return array(trim(implode("\n", $extracted)), trim(implode("\n", $remains)));
        } else {
            return trim(implode("\n", $extracted));
        }
    }

    /**
     * Create a trimmed array from a multi-line document.
     *
     * @param  [type] $arr [description]
     * @return [type]      [description]
     */
    public function make_array($arr)
    {
        if (!is_array($arr)) {
            $arr = explode("\n", $arr);
        }

        $source_lines = count($arr);

        for ($idx=0; $idx < $source_lines; $idx++) {
            $arr[$idx] = rtrim($arr[$idx]);
        }

        return $arr;
    }

    /**
     * Create start and end markers for the given hunk.
     *
     * @param  [type] $hunk  [description]
     * @param  [type] $start [description]
     * @param  [type] $end   [description]
     * @return [type]        [description]
     */
    public function make_markers($hunk, $start, $end)
    {
        $smarker = $start . str_replace("SECTION", $hunk, $this->ied_plugin_globals['start']) . (($end)?' '.$end:'');
        $emarker = $start . str_replace("SECTION", $hunk, $this->ied_plugin_globals['end']) . (($end)?' '.$end:'');

        return (array($smarker, $emarker));
    }

    /**
     * Check if the code smells like an admin-side plugin.
     *
     * Ripped and modded from net-carver's zem_tpl template.
     *
     * @param  string $codeblock The source code
     * @param  string $type      The plugin's type
     * @return bool              true if the code is a public-side plugin
     *                           false if it seems to be admin-side
     */
    public function admin_check($codeblock, $type)
    {
        // Short circuit since we're only interested in public plugins.
        if ($type != '0' || strpos($codeblock, 'txpinterface') === false) {
            return true;
        }

        // This is several orders of magnitude quicker than a single preg_match
        // as plugin size increases.
        $cb = str_replace(array('\t', ' '), '', $codeblock);
        $cb = str_replace('===', '==', $cb);

        if (strpos($cb, 'txpinterface==\"admin') ||
            strpos($cb, "txpinterface==\'admin") ||
            strpos($cb, 'admin\"==txpinterface') ||
            strpos($cb, "admin\'==txpinterface") ||
            strpos($cb, 'admin\"==@txpinterface') ||
            strpos($cb, "admin\'==@txpinterface")) {

            return false;
        }

        return true;
    }

    /**
     * Textile the passed help doc and style info.
     *
     * Cache the content if the prefs indicate to do so.
     *
     * @param  [type] $name      [description]
     * @param  [type] $help      [description]
     * @param  [type] $css       [description]
     * @param  [type] $start_dlm [description]
     * @param  [type] $end_dlm   [description]
     * @return [type]            [description]
     */
    public function textile($name, $help, $css, $start_dlm, $end_dlm)
    {
        $tmpdir = $hlpfile = '';
        $changed = true;
        $out = array();
        $iotc = get_pref('ied_plugin_output_tmpcache');

        if (isset($iotc) && !empty($iotc) && is_writable($iotc)) {
            $tmpdir = $iotc;
            $cache = build_file_path($tmpdir, 'ied_plugin_composer.cache');
            if (!file_exists($cache)) {
                touch($cache); // Create file if it doesn't exist
            }
            $plugs = parse_ini_file($cache);

            $old_md5 = (is_array($plugs) && array_key_exists($name, $plugs)) ? $plugs[$name] : '';
            $curr_md5 = md5($help);
            $hlpfile = build_file_path($tmpdir, $name.'_help.txtl');
            if ($old_md5 == $curr_md5) {
                $out[0] = file_get_contents($hlpfile);
                $changed = false;
            } else {
                $plugs[$name] = $curr_md5;
                $fd = fopen($cache, "w");
                foreach ($plugs as $idx => $val) {
                    fwrite($fd, $idx.' = '.$val.n);
                }
                fclose($fd);
            }
        }

        if (!$out) {
            @include_once txpath.'/lib/classTextile.php';
            $out[0] = $help;
            if (class_exists('Textile')) {
                // Try and be a little more intelligent about applying textile or not
                $re = '/h[0-6](\(.*\))?\./';
                if (preg_match($re, $help)) {
                    $textile = new Textile();
                    $out[0] = $textile->TextileThis($help);
                }
            }
        }

        if ($tmpdir && $changed) {
            if (!file_exists($hlpfile)) {
                touch($hlpfile);
            }
            $fd = fopen($hlpfile, "w");
            fwrite($fd, $out[0]);
            fclose($fd);
        }

        // Replace the triple '---' in the delimiters so the help file can validate
        $start_dlm = str_replace('---', '***', $start_dlm);
        $end_dlm = str_replace('---', '***', $end_dlm);

        $out[1] = ($css) ? "\n$start_dlm\n$css\n$end_dlm\n" : '';

        return substr(implode('', $out), 0, $this->ied_plugin_globals['size_help']+$this->ied_plugin_globals['size_css']);
    }

    /**
     * Inject any necessary javascript on the page for code helpers.
     */
    public function insert_editors()
    {
        $out = array();
        $ed = array();
        $ced = get_pref('ied_plugin_editor');
        $hed = get_pref('ied_plugin_help_editor');
        $cop = get_pref('ied_plugin_editor_options');
        $hop = get_pref('ied_plugin_help_editor_options');
        $ed[$ced] = get_pref('ied_plugin_editor_path');
        $ed[$hed] = get_pref('ied_plugin_help_editor_path');

        $cop = $cop ? ','.$cop : '';
        $hop = $hop ? ','.$hop : '';

        foreach ($ed as $editor => $editor_locs) {
            $jsop = array();
            $locs = do_list($editor_locs);
            foreach ($locs as $loc) {
                if (strpos($loc, 'css:') !== false) {
                    $jsop[] = '<link rel="stylesheet" href="'.substr($loc, 4).'">';
                } else {
                    $jsop[] = '<script type="javascript" src="'.$loc.'"></script>';
                }
            }

            $jsop = implode(n, $jsop);

            switch ($editor) {
                case "tiny_mce":
                    $out[] = <<<EOJS
{$jsop}
<script type="text/javascript">
tinyMCE.init({
    mode : "specific_textareas",
    editor_selector : "mceEditor"
    {$hop}
});
</script>;
EOJS;
                break;
                case "edit_area":
                    $out[] = <<<EOJS
{$jsop}
<script type="text/javascript">
// initialisation
editAreaLoader.init({
    id: "plugin_editor",
    syntax: "php"
    {$cop}
});
</script>
EOJS;
                break;
                case "codemirror":
                    $out[] = <<<EOJS
{$jsop}
<script type="text/javascript">
myTextArea = document.getElementById("plugin_editor");
var ied_pc_editor = CodeMirror.fromTextArea(myTextArea, {
    value: myTextArea.value
    {$cop}
});
</script>
EOJS;
                break;
                case "codepress":
                    $out[] = $jsop;
                break;
            }
        }

        return implode("\n", $out);
    }

    /**
     * Show plugin help documentation.
     *
     * If raw, will Textile first.
     *
     * @param  string $message [description]
     * @return [type]          [description]
     */
    public function help_viewer($message = '')
    {
        if (gps('name')) {
            $name = gps('name');
            $help = ($name) ? fetch('help','txp_plugin','name',$name) : '';
            list($css,$help) = ($help) ? $this->extract_hunk($help, "CSS", "<!--|-->", true) : array('',$help);
        } elseif (gps('filename')) {
            $plugin = $this->read_file(get_pref('plugin_cache_dir').DS.gps('filename'));
            extract($plugin);
        }

        $out = '';
        if (empty($help)) {
            $out = gTxt('ied_plugin_help_not_available');
        } else {
            list ($start_css, $end_css) = $this->make_markers("CSS", $this->ied_plugin_globals['css_start'], $this->ied_plugin_globals['css_end']);
            $out = $this->textile($name, $help, $css, $start_css, $end_css);
        }

        pagetop(gTxt('ied_plugin_view_help', array('{name}' => $name)), $message);
        echo n. '<div id="plugin_container" class="txp-container txp-view">'.
            n. '<div class="text-column">' . $out . '</div>'.
            n. '</div>';
    }

    /**
     * Wrap the passed widget with standard markup.
     *
     * @param  string $widget The widget to wrap
     * @param  string $class  The CSS class to apply to the wrapper
     * @return string         HTML
     */
    public function wrap_widget($widget, $class = 'txp-form-field-value')
    {
        return '<div class="' . $class . '">'.$widget.'</div>';
    }

    /**
     * Preferences stub with correct signature for lifecycle callback.
     *
     * @param  string $evt Textpattern event
     * @param  string $stp Textpattern step (action)
     */
    public function setup($evt = '', $stp = '')
    {
        $this->prefs();
    }

    /**
     * Display the setup / prefs panel.
     *
     * @param  string $message Any feedback error / info message to disply
     * @return string          HTML
     */
    public function prefs($message = '')
    {
        require_privs('plugin_prefs.'.$this->ied_pc_event);

        if (ps('ied_plugin_pref_save')) {
            $this->prefs_update();
            $message = gTxt('preferences_saved');
        }

        $ied_plugin_prefs = $this->get_prefs();

        pagetop(gTxt('ied_plugin_lbl_setup'), $message);

        $btnSave = fInput('submit', 'submit', gTxt('save'), 'publish');

        echo '<div class="txp-layout">'
            .n. '<div class="txp-layout-2col">'
            .n. '<h1 class="txp-heading">' . gTxt('ied_plugin_lbl_setup') . '</h1>'
            .n. '</div>'
            .n. '<div class="txp-layout-2col">'
            .n. sLink($this->ied_pc_event, '', gTxt('ied_plugin_list'), 'ied_plugin_link')
            .n. '</div>'
            .n. script_js(<<<EOJS
var ied_plugin_path_re = new RegExp("^.*[/\\]", "g")
function ied_plugin_prefswap(selID, selValue)
{
    var id = selID+'_path';
    var nuval = ((basename($("#"+id).val()) == selValue) ? $("#"+id).val() : dirname($("#"+id).val())+selValue);

    if ($("#"+selID)[0].selectedIndex == 0) {
        $("#"+id).attr("disabled", true);
    } else {
        $("#"+id).attr("disabled", false);
        $("#"+id).val(nuval);
    }
}
function basename(path, suffix)
{
    return path.replace(ied_plugin_path_re, '');
}
function dirname(path)
{
    return path.match(ied_plugin_path_re);
}
jQuery(function () {
    jQuery(".ied_plugin_setup select option:selected").each(function (obj) {
        var item = jQuery(this);
        ied_plugin_prefswap(item.parent().attr('id'), item.val());
    });
});
EOJS
            );

        $out = array();
        $out[] = n.'<div class="txp-layout-1col">';
        $out[] = '<form name="ied_pc_prefs" id="ied_pc_prefs" class="txp-prefs-group" action="index.php" method="post">';
        $out[] = eInput($this->ied_pc_event).sInput('prefs');

        $last_grp = '';

        foreach ($ied_plugin_prefs as $idx => $prefobj) {
            if ($last_grp != $prefobj['group']) {
                $out[] = hed(gTxt($prefobj['group']), 2);
            }
            $last_grp = $prefobj['group'];
            $subout = array();
            $label = '<div class="txp-form-field-label">'
                    .'<label>'.gTxt($idx).'</label>'
                    .'</div>';
            $val = get_pref($idx, $prefobj['default'], 1);
            $vis = (isset($prefobj['visible']) && !$prefobj['visible']) ? 'empty' : 'txp-form-field';
            switch ($prefobj['html']) {
                case 'text_input':
                    $subout[] = $this->wrap_widget(fInput('text', $idx, $val, '', '', '', INPUT_REGULAR, '', $idx));
                break;
                case 'textarea':
                    $subout[] = $this->wrap_widget(text_area($idx, '', '', $val, $idx));
                    $vis = (isset($prefobj['visible']) && !$prefobj['visible']) ? 'empty' : 'txp-form-field-textarea';
                break;
                case 'yesnoradio':
                    $subout[] = $this->wrap_widget(yesnoRadio($idx, $val));
                break;
                case 'radioset':
                    $subout[] = $this->wrap_widget(radioSet($prefobj['content'], $idx, $val));
                break;
                case 'checkboxset':
                    $vals = do_list($val);
                    $lclout = array();
                    $cb_count = 0;

                    foreach ($prefobj['content'] as $cb => $val) {
                        $checked = in_array($cb, $vals);
                        $cbId = txpspecialchars($idx.'-'.$cb_count);
                        $lclout[] = checkbox($idx . '[]', $cb, $checked, '', $cbId) . n . '<label for="' . $cbId . '">' . gTxt($val) . '</label>';
                        $cb_count++;
                    }

                    $subout[] = $this->wrap_widget(implode(n, $lclout));
                break;
                case 'selectlist':
                    $subout[] = $this->wrap_widget(selectInput($idx, $prefobj['content'][0], $val, $prefobj['content'][1]));
                break;
                default:
                    if (is_callable($prefobj['html'])) {
                        $subout[] = $this->wrap_widget($prefobj['html']($idx, $val));
                    }
                break;
            }
            $out[] = tag($label . n.implode(n ,$subout), 'div', ($vis ? ' class="'.$vis.'"' : ''));
        }
        $out[] = graf(fInput('submit', 'ied_plugin_pref_save', gTxt('save'), 'publish'), array('class' => 'txp-save'));
        $out[] = tInput();
        $out[] = '</form></div></div>';

        echo implode(n, $out);
    }

    /**
     * Save plugin prefs from setup panel.
     */
    public function prefs_update()
    {
        global $prefs;

        $ied_plugin_prefs = $this->get_prefs();
        $saved = ps('ied_plugin_pref_save');

        // Loop through each plugin setting and make sure it's in the prefs table, as follows:
        // 1) if the value has been POSTed from the prefs panel, set the passed value
        // 2) if the value exists in the prefs (i.e. run on upgrade), set the existing value
        // 3) if neither exist, set the plugin default value
        foreach ($ied_plugin_prefs as $key => $prefobj) {
            $val = ($saved || isset($_POST[$key])) ? ps($key) : ((isset($prefs[$key])) ? $prefs[$key] : $prefobj['default']);
            $val = (is_array($val)) ? implode(', ', $val) : $val;
            set_pref($key, $val, 'ied_plugin', $prefobj['type'], $prefobj['html'], $prefobj['position']);
        }
    }

    /**
     * Delete plugin prefs.
     *
     * @param  integer $showpane Whether to display the panel afterwards
     */
    public function prefs_remove($showpane = 1)
    {
        safe_delete('txp_prefs', "name like 'ied_plugin_%'");

        if ($showpane) {
            $message = gTxt('ied_plugin_prefs_deleted');
            $this->prefs($message);
        }
    }

    /**
     * Generate list of available languages.
     *
     * @param  string $flavour If 'installed' then show only those available, else 'all'
     * @return array
     */
    public static function lang_list($flavour = 'installed')
    {
        $ied_langs = array();

        if ($flavour === 'installed') {
            // Self-join to get all the installed langs and language strings in one step.
//            $installed_langs = safe_query('select t1.lang, t2.data from '.PFX.'txp_lang as t1, '.PFX.'txp_lang as t2 WHERE t1.lang = t2.name GROUP BY lang');
            $ied_langs = safe_column('lang', 'txp_lang', '1=1 GROUP BY lang');
        } else {
            // Grab all available langs from the RPC server.
            require_once txpath.'/lib/IXRClass.php';

            $client = new IXR_Client(RPC_SERVER);

            // Get items from RPC.
            @set_time_limit(5);

            if ($client->query('tups.listLanguages', get_pref('blog_uid'))) {
                $response = $client->getResponse();

                foreach ($response as $language) {
                    $ied_langs[] = $language['language'];
                }
            }
        }

        // Build the select list array.
        $langlist = array();

        foreach ($ied_langs as $ied_lang) {
            $langlist[$ied_lang] = gTxt($ied_lang);
        }

        return $langlist;
    }

    /**
     * Build textpack from strings in the database.
     *
     * @param  string  $name      Plugin name
     * @param  integer $force_all Whether to build for the current langue (0) or all installed languages (1)
     * @return string             The Textpack
     */
    public function textpack_build($name, $force_all = 0)
    {
        $fetch_lang = null;

        if ($force_all === 0) {
            $fetch_lang = gps('lang');
        }

        if (!$fetch_lang) {
            $fetch_lang = ($force_all === 1)
                ? implode(',', array_keys(self::lang_list('installed')))
                : get_pref('ied_plugin_lang_selected', '');
        }

        $tpout = array();

        if ($fetch_lang) {
            $chosen_lang = get_pref('ied_plugin_lang_default', '');

            // Guard against situations when the chosen default lang is 'any'.
            $dflt_lang = ($chosen_lang === '') ? get_pref('language') : $chosen_lang;

            $tp_pfx = unserialize(get_pref('ied_plugin_tp_prefix', '', 1));
            $tp_pfx = isset($tp_pfx[$name]) ? $tp_pfx[$name] : '';
            $tp_rows = $this->textpack_grab($fetch_lang, $tp_pfx);

            if ($tp_rows) {
                $ctr = 0;
                $prevlang = '';

                // Go through all the languages and put the default language at the start of the array.
                foreach ($tp_rows as $row) {
                    // Add the event marker
                    $theEvent = in_array($row['event'], array('public', 'common')) ? $row['event'] : $tp_pfx;

                    if ($prevlang != $row['lang']) {
                        $ctr++;
                    }

                    $idx = ($row['lang'] == $dflt_lang) ? 0 : $ctr;
                    $tplang[$idx][$theEvent][$row['lang']][$row['name']] = $row['data'];
                    $prevlang = $row['lang'];
                    $prevevent = $row['event'];
                }

                // Make sure default language is actually first.
                ksort($tplang);

                // Build the final textpack array with language markers.
                // Note the marker for the default language may (should!) be omitted if the author wants
                // the strings to be installed regardless of language on destination server.
                // If a specific language is set and the user does not have that language
                // installed, the strings would not be inserted.
                $prevevent = '';

                foreach ($tplang as $idx => $langblock) {
                    foreach ($langblock as $ev => $codeblock) {
                        $tpheader = array();
                        $tpstrings = array();

                        if ($prevevent != $ev) {
                            $tpheader[] = '#@' . $ev;
                        }

                        foreach ($codeblock as $code => $data) {
                            if (($idx == 0 && $chosen_lang) || ($idx > 0)) {
                                $tpheader[] = '#@language ' . $code;
                            }

                            foreach ($data as $key => $val) {
                                // Don't output empty strings.
                                if ($val) {
                                    $tpstrings[] = $key . ' => ' . $val;
                                }
                            }

                            if ($tpstrings) {
                                $tpout = array_merge($tpout, $tpheader, $tpstrings);
                            }
                        }
                    }
                }
            }
        }

        return implode(n, $tpout);
    }

    /**
     * Read textpack strings with the given prefix from the database.
     *
     * @param  string $lang   Language of strings to fetch
     * @param  string $prefix Prefix to find
     * @return array          Record set of matching strings
     */
    public function textpack_grab($lang, $prefix)
    {
        if ($lang === 'IED_ALL') {
            $lang_query = '';
        } else {
            $lang = (empty($lang)) ? get_pref('language', 'en-gb') : $lang;
            $langs = quote_list(do_list($lang));
            $lang_query = "lang IN (".implode(', ', $langs).") AND ";
        }

        return ($prefix) ? safe_rows('name, data, lang, event', 'txp_lang', $lang_query."name LIKE '".doSlash($prefix)."%' ORDER BY event,lang,name") : array();
    }

    /**
     * Set the current Textpack language from which to display strings in the interface.
     *
     * Requires POST variable:
     *  param  string ied_tp_langsel  The language name to set
     */
    public function lang_set()
    {
        $sel = doSlash(gps('ied_tp_langsel'));
        set_pref('ied_plugin_lang_selected', $sel, 'ied_plugin', PREF_HIDDEN, 'text_input', 0, PREF_PRIVATE);
    }

    /**
     * Store the plugin textpack prefix.
     *
     * @param string $plugname Plugin name to store (if omitted, tries GET/POST for 'plugin')
     * @param string $pfx      Prefix to store (if omitted, tries GET/POST for 'prefix')
     */
    public function set_tp_prefix($plugname = '', $pfx = '')
    {
        $plugname = ($plugname) ? $plugname : gps('plugin');
        $pfx = ($pfx) ? $pfx : gps('prefix');

        if ($pfx) {
            $curr_pfx = unserialize(get_pref('ied_plugin_tp_prefix'));
            $curr_pfx[$plugname] = $pfx;
            set_pref('ied_plugin_tp_prefix', serialize($curr_pfx), 'ied_plugin', PREF_HIDDEN, 'text_input');
        }
    }

    /**
     * AJAX: Return a Textpack string from a (type 4 or 5) plugin gTxt() function/method.
     *
     * Given a function name (usually 'abc_plugin_gTxt') it calls the function
     * to fetch the given string from the plugin. By calling this repeatedly
     * or each string, an entire Textpack can be built from strings that were
     * previously hard-coded in old plugins.
     *
     * Note the destination plugin MUST be of type 4 or 5 in order for the
     * function to be callable so you may have to (temporarily) alter the
     * plugin type before using this feature.
     *
     * Requires POST variables:
     *  param  string ied_tp_fn  The function to call
     *  param  string ied_tp_lbl The language label (key)
     * @return array             JSON structure containing the string's value
     * @todo sanitize $fn
     */
    public function textpack_load()
    {
        $fn = doSlash(gps('ied_tp_fn'));
        $lbl = doSlash(gps('ied_tp_lbl'));
        $ret = '';

        $fnparts = do_list($fn, '::');
        if (count($fnparts) == 2) {
            // Callable class -> method
            $fobj = array($fnparts[0], $fnparts[1]);
        } else {
            $fobj = $fnparts[0];
        }
        if (is_callable($fobj)) {
            $ret = call_user_func_array($fobj, array($lbl));
        }

        if ($ret) {
            echo json_encode(array('ied_plugin_tp_string' => $ret));
        }
    }

    /**
     * AJAX: Delete a Textpack string from the database.
     *
     * Requires POST variable:
     *  param  string ied_tp_lbl The language label (key) to delete
     */
    public function textpack_del()
    {
        $lbl = doSlash(gps('ied_tp_lbl'));

        $ret = safe_delete('txp_lang', "name='$lbl'");
    }

    /**
     * AJAX: save a Textpack string to the database.
     *
     * Requires POST variables:
     *  param  string ied_tp_lbl The language label (key)
     *  param  string ied_tp_str The data value to store
     *  param  string ied_tp_lng Desired language of string
     *  param  string ied_tp_evt Event (group) that the string belongs in
     */
    public function textpack_save()
    {
        global $DB;

        $lbl = doSlash(gps('ied_tp_lbl'));
        $str = doSlash(gps('ied_tp_str'));
        $lng = doSlash(gps('ied_tp_lng'));
        $evt = doSlash(gps('ied_tp_evt'));
        $own = doSlash(gps('ied_tp_own'));

        $where = "name='$lbl' AND lang='$lng'";
        $ret = safe_update('txp_lang', "data='$str', event='$evt', owner='$own'", $where);

        if ($ret && (mysqli_affected_rows($DB->link) || safe_count('txp_lang', $where))) {
            // Update OK: do nothing else.
        } else {
            $ret = safe_insert('txp_lang', "name='$lbl', lang='$lng', event='$evt', owner='$own', data='$str'");
        }
    }

    /**
     * AJAX: Fetch a Textpack string from the database.
     *
     * Requires POST variables:
     *  param  string ied_tp_lbl  The language label (key)
     *  param  string ied_tp_lng  Language of string to fetch
     *  param  string ied_tp_dflt Default language to fetch string if main lang missing
     * @return array              JSON response
     */
    public function textpack_get()
    {
        $lbl = doSlash(gps('ied_tp_lbl'));
        $lng = doSlash(gps('ied_tp_lng'));
        $dflt = doSlash(gps('ied_tp_dflt'));

        $rs = safe_rows('lang, data', 'txp_lang', "name='$lbl' AND (lang='$lng' OR lang='$dflt')");
        $out = array();

        foreach ($rs as $row) {
            if (($row['lang'] == $dflt) && ($lng != $dflt)) {
                $out['ied_plugin_tp_dflt'] = $row['data'];
            } else {
                $out['ied_plugin_tp_string'] = $row['data'];
            }
        }

        echo json_encode($out);
    }

    /**
     * AJAX: Save just the plugin code, optionally checking syntax.
     *
     * Requires POST variables:
     *  param  string plugin    Name of plugin to save against
     *  param  string codeblock PHP code
     * @return array            XML response
     */
    public function code_save()
    {
        global $theme;

        $syntax_check = get_pref('ied_plugin_syntax_check');

        $plug = doSlash(ps('plugin'));
        $code = ps('codeblock');

        $ret = ($syntax_check) ? $this->check_syntax_err($code) : false;
        $msg = '';

        if ($ret === false) {
            $ret = @safe_update('txp_plugin', "code='".doSlash($code)."'", "name='$plug'");
            if ($ret) {
                $msg = $theme->announce_async(gTxt('ied_plugin_code_saved'));
            } else {
                $msg = $theme->announce_async(array(gTxt('ied_plugin_code_saved_fail'), E_ERROR));
            }
            send_xml_response(array('ied_plugin_msg' => $msg));
        } else {
            $msg = $theme->announce_async(array(htmlentities($ret[0], ENT_QUOTES), E_ERROR));
            send_xml_response(array('http-status' => '412 Precondition Failed', 'ied_plugin_msg' => $msg, 'ied_plugin_err_line' => $ret[1]));
        }
    }

    /**
     * AJAX: Save just the plugin metadata.
     *
     * Requires POST variables:
     *  param  string plugin Name of plugin to save against
     *  param  array  data   Name-value pairs to store
     * @return array         XML response
     */
    public function meta_save() {
        global $theme;

        $ied_plugin_prefs = $this->get_prefs();

        $plug = doSlash(ps('plugin'));
        $data = ps('data');
        $msg = '';
        $meta = array();

        // Defaults required because HTML forms don't post unchecked items.
        $set = array(
            'flags'  => "flags='0'",
            'status' => "status='0'",
            );

        foreach ($data as $key => $value) {
            switch ($key) {
                case 'description':
                case 'version':
                case 'author':
                case 'author_uri':
                case 'type':
                case 'load_order':
                    $set[$key] = $key . "='".doSlash($value)."'";
                    break;
                case 'newname':
                    $val = doSlash($value);
                    $set['name'] = "name='".$val."'";
                    $meta['name'] = $val;
                    break;
                case 'status':
                case 'flags':
                    $part = array();

                    foreach ($value as $item) {
                        if (!isset($part[$key])) {
                            $part[$key] = '';
                        }
                        $part[$key] += $item;
                    }

                    foreach ($part as $idx => $val) {
                        $set[$idx] = $idx . "='" . doSlash($val)."'";
                    }

                    break;
            }
        }

        $update = implode(',', $set);
        $ret = safe_update('txp_plugin', $update, "name='$plug'");

        if ($ret) {
            $msg = $theme->announce_async(gTxt('ied_plugin_meta_saved'));
        } else {
            $msg = $theme->announce_async(array(gTxt('ied_plugin_meta_saved_fail'), E_ERROR));
        }

        send_xml_response(array('ied_plugin_msg' => $msg));
    }

    /**
     * Check the syntax of some PHP code.
     *
     * Mostly from a comment in http://php.net/manual/en/function.php-check-syntax.php
     *
     * @param  string $code  PHP code to check.
     * @return boolean|array If false, then check was successful, otherwise an array(message,line) of errors is returned.
     */
    public function check_syntax_err($code)
    {
        if (!defined('CR')) define('CR',chr(13));
        if (!defined('LF')) define('LF',chr(10));

        $braces=0;
        $inString=0;

        foreach (token_get_all('<?php ' . $code) as $token) {
            if (is_array($token)) {
                switch ($token[0]) {
                    case T_CURLY_OPEN:
                    case T_DOLLAR_OPEN_CURLY_BRACES:
                    case T_START_HEREDOC: ++$inString; break;
                    case T_END_HEREDOC:   --$inString; break;
                }
            } elseif ($inString & 1) {
                switch ($token) {
                    case '`': case '\'':
                    case '"': --$inString; break;
                }
            } else {
                switch ($token) {
                    case '`': case '\'':
                    case '"': ++$inString; break;
                    case '{': ++$braces; break;
                    case '}':
                        if ($inString) {
                            --$inString;
                        } else {
                            --$braces;
                            if ($braces < 0) break 2;
                        }
                        break;
                }
            }
        }
        $inString = @ini_set('log_errors', false);
        $token = @ini_set('display_errors', true);
        ob_start();
        $braces || $code = "if (0) {{$code}\n}";
        if (eval($code) === false) {
            if ($braces) {
                $braces = PHP_INT_MAX;
            } else {
                false !== strpos($code,CR) && $code = str_replace(CR,LF,str_replace(CRLF,LF,$code));
                $braces = substr_count($code,LF);
            }
            $code = ob_get_clean();
            $code = strip_tags($code);
            if (preg_match("'syntax error, (.+) in .+ on line (\d+)$'s", $code, $code)) {
                $code[2] = (int) $code[2];
                $code = $code[2] <= $braces
                    ? array($code[1], $code[2])
                    : array('unexpected $end' . substr($code[1], 14), $braces);
            } else $code = array('syntax error', 0);
        } else {
            ob_end_clean();
            $code = false;
        }
        @ini_set('display_errors', $token);
        @ini_set('log_errors', $inString);

        return $code;
    }

    // Reflection utility for phpdoc generation
    public function reflunction_factory($callback)
    {
        if (is_array($callback)) {
            // must be a class method
            list($class, $method) = $callback;


            return new ReflectionMethod($class, $method);
        }

        // class::method syntax
        if (is_string($callback) && strpos($callback, "::") !== false) {
            list($class, $method) = explode("::", $callback);

            return new ReflectionMethod($class, $method);
        }

        // objects as functions (PHP 5.3+)
        if (version_compare(PHP_VERSION, "5.3.0", ">=") && method_exists($callback, "__invoke")) {
            return new ReflectionMethod($callback, "__invoke");
        }

        // assume it's a function
        return new ReflectionFunction($callback);
    }

    public function generate_phpdoc()
    {
        $plug = gps('plugin');
        $obj = gps('fn');
        $ret = load_plugin($plug);
        if ($ret) {
            try {
                $obj = $this->reflunction_factory($obj);
                $name = $obj->getName();
                $doc = $obj->getDocComment();

                if ($doc) {
                    //TODO: make list of allowed docblock tags a pref
                    //TODO: parse existing doc block and append any new vars/params
                    preg_match_all('/\s*\*\s*\@(abstract|access|author|category|copyright|deprecated|example|final|filesource|global|ignore|internal|license|link|method|name|package|param|property|return|see|since|static|staticvar|subpackage|todo|tutorial|uses|var|version)\s+(\w+)\s+(\$\w+(?::\w+|->\w+)*)\s+(\[(\&|\+|abstract|final|private|protected|public|static)\])*\s+(.*)/', $doc, $matches, PREG_SET_ORDER);

                    $tags = array();
                    // Reshuffle the matches to index on [tag][var]
                    foreach ($matches as $idx => $data) {
                        $ful = isset($data[0]) ? $data[0] : '';
                        $tag = isset($data[1]) ? $data[1] : '';
                        $typ = isset($data[2]) ? $data[2] : '';
                        $var = isset($data[3]) ? $data[3] : '';
                        $mod = isset($data[4]) ? $data[4] : '';
                        $tags[$tag][$var] = array(
                            'type' => $typ,
                            'full' => $ful,
                            'mod'  => $mod,
                        );
                    }
                }

                $fntype = array('meta' => array(), 'type' => array());

                if (method_exists($obj, 'isConstructor')) {
                    // Dealing with a class method
                    if ($obj->isConstructor()) {
                        $fntype['meta'][] = ' [c]';
                    }
                    if ($obj->isPublic()) {
                        $fntype['mod'][] = '[public]';
                    }
                    if ($obj->isPrivate()) {
                        $fntype['mod'][] = '[private]';
                    }
                    if ($obj->isProtected()) {
                        $fntype['mod'][] = '[protected]';
                    }
                    if ($obj->isAbstract()) {
                        $fntype['mod'][] = '[abstract]';
                    }
                    if ($obj->isFinal()) {
                        $fntype['mod'][] = '[final]';
                    }
                    if ($obj->isStatic()) {
                        $fntype['mod'][] = '[static]';
                    }
                }

                $params = $obj->getParameters();
                $param_list = array();
                if ($params != null) {
                    foreach ($params as $param) {
                        $has_dflt = false;
                        $type = 'string';

                        // Crude type checker
                        if ($param->isDefaultValueAvailable()) {
                            $has_dflt = true;
                            $dflt = $param->getDefaultValue();

                            if (is_bool($dflt)) {
                                $type = 'boolean';
                                $dflt = $dflt ? 'true' : 'false';
                            } elseif (is_null($dflt)) {
                                $dflt = 'NULL';
                            } elseif ($dflt == (string) (int) $dflt) {
                                $type = 'integer';
                            } elseif ($dflt == (string) (float) $dflt) {
                                $type = 'float';
                            } elseif (is_numeric($dflt)) {
                                $type = 'number';
                            } elseif (is_array($dflt)) {
                                $type = 'array';
                            }

                            if ( ($type == 'string' || $type == 'array') && empty($dflt) ) {
                                $dflt = 'empty';
                            } elseif ($type == 'string' && $dflt != 'NULL') {
                                $dflt = '"'.$dflt.'"';
                            }
                        }

                        $item = '@param'.t.$type.t.'$'.$param->getName();
                        if ($param->isPassedByReference()) {
                            $item .= ' [&]';
                        }
                        if ($param->allowsNull()) {
                            $item .= ' [+]';
                        }
                        $item .= ($has_dflt) ? t.'(Default: ' .$dflt. ')' : t;
                        $item .= t.'Param description';
                        $param_list[] = $item;
                    }
                }

                $final = '<pre>';
                $final .= "/**".br;
                $final .= " * $name" . ((!empty($fntype['meta'])) ? $fntype['meta'] : '') .t. (($fnType['mod']) ? implode(' ', $fnType['mod']).' ' : '') . "Description".br;
                $final .= " *".br;
                $final .= " * Summary goes here".br;
                $final .= " *".br;
                foreach ($param_list as $item) {
                    $final .= " * ". $item.br;
                }
                $final .= " */</pre>".br;

                send_xml_response(array('ied_plugin_phpdoc' => $final));
            } catch (Exception $ex) {
                send_xml_response( array( 'http-status' => '501 Not Implemented', 'error_msg' => $ex->getMessage() . gTxt('ied_plugin_fn_not_exist') ) );
            }
        } else {
            send_xml_response(array('http-status' => '400 Bad Request'));
        }

    /*  $classInterfaces=$reflection->getInterfaces();
        //get information about the interfaces
        if ($classInterfaces != null) {
        fwrite($hf,"\n</i>\t</td></tr>\n\t<tr>".
        "<td align=\"center\" colspan=\"0\">".
        "<font face=\"arial\" size=\"2\"".
        " color=\"purple\">Implemented".
        " interfaces:</td><td align=\"center\"".
        " colspan=\"0\"><font face=\"arial\"".
        " size=\"2\" color=\"black\"><b>Name</b>".
        "</font></td><td align=\"center\"".
        " colspan=\"3\"><font face=\"arial\"".
        " size=\"2\" color=\"black\"><b>".
        "Description</b></font></td></tr>\n");
         foreach ($classInterfaces as $in) {
            fwrite($hf,"\t<tr><td></td><td align=".
            "\"center\">");
            fwrite($hf,$in->getName());
            fwrite($hf,"</td><td align=\"center\"".
            " colspan=\"3\"><i>\n");
            fwrite($hf,$in->getDocComment());
            fwrite($hf,"</i></td></tr>\n");
            }
         }

        //get the superclass information
        $superclass=$reflection->getParentClass();
        if ($superclass != null) {
            fwrite($hf,"\t<tr><td align=\"center\"".
             "colspan=\"0\"><font face=\"arial\"".
             " size=\"2\" color=\"purple\">".
             "The superclass is:</td><td".
             " align=\"center\" colspan=\"4\">".
             "<font face=\"arial\" size=\"2\"".
             " color=\"black\"><b>\n");
            fwrite($hf,$superclass->getName());
            fwrite($hf,"</font></td></tr>\n");
            }

        //get information about the constants
        $constants=$reflection->getConstants();
        if ($constants != null) {
          $constantsNumber=count($constants);
          fwrite($hf,"\t<tr><td align=\"center\"".
          " colspan=\"0\"><font face=\"arial\"".
          " size=\"2\" color=\"purple\">".
          "Constants:</td><td align=\"center\"".
          " colspan=\"0\"><font face=\"arial\"".
          " size=\"2\" color=\"black\"><b>Name</b>".
          "</font></td><td align=\"center\"".
          " colspan=\"3\"><font face=\"arial\"".
          " size=\"2\" color=\"black\"><b>Value</b>".
          "</font></td></tr>\n");
          foreach ($constants as $keys=>$value) {
            fwrite($hf,"\t<tr><td></td><td".
            " align=\"center\">");
            fwrite($hf,$keys);
            fwrite($hf,"</td><td align=\"center\"".
            " colspan=\"3\">");
            fwrite($hf,$value);
            fwrite($hf,"</td></tr>\n");
            }
          }

        //get information about properties
        $properties=$reflection->getProperties();
        if ($properties != null) {
          fwrite($hf,"\t<tr><td align=\"center\"".
          " colspan=\"0\"><font face=\"arial\"".
          " size=\"2\" color=\"purple\">".
          "Properties:</td><td align=\"center\"".
          " colspan=\"0\"><font face=\"arial\"".
          " size=\"2\" color=\"black\"><b>Name</b>".
          "</font></td><td align=\"center\"".
          " colspan=\"3\"><font face=\"arial\"".
          " size=\"2\" color=\"black\"><b>".
          "Modifiers</b></font></td></tr>\n");
          foreach ($properties as $in) {
             fwrite($hf,"\t<tr><td></td><td".
             " align=\"center\" colspan=\"0\">");
             fwrite($hf,$in->getName());
             fwrite($hf,"</td><td align=\"center\"".
             " colspan=\"3\">");

             if ($in->isPublic()) { fwrite($hf,"[public]"); }
             if ($in->isPrivate()) { fwrite($hf,"[private]"); }
             if ($in->isProtected()) { fwrite($hf,"[protected]"); }
             if ($in->isStatic()) { fwrite($hf,"[static]"); }
             fwrite($hf,"</td></tr>\n");
             }
          }
    */

    }

    // ------------------------
    // Settings for the plugin
    public function get_prefs()
    {
        $tempdir = get_pref('tempdir');

        $ied_pc_prefs = array(
            'ied_plugin_editor' => array(
                'html'     => 'ied_plugin_code_editors',
                'type'     => PREF_HIDDEN,
                'position' => 10,
                'default'  => 'none',
                'group'    => 'ied_plugin_if_settings',
            ),
            'ied_plugin_editor_path' => array(
                'html'     => 'text_input',
                'type'     => PREF_HIDDEN,
                'position' => 20,
                'default'  => hu.'js/',
                'group'    => 'ied_plugin_if_settings',
            ),
            'ied_plugin_editor_options' => array(
                'html'     => 'textarea',
                'type'     => PREF_HIDDEN,
                'position' => 30,
                'default'  => '',
                'group'    => 'ied_plugin_if_settings',
            ),
            'ied_plugin_editor_width' => array(
                'html'     => 'text_input',
                'type'     => PREF_HIDDEN,
                'position' => 40,
                'default'  => '90%',
                'group'    => 'ied_plugin_if_settings',
            ),
            'ied_plugin_help_editor' => array(
                'html'     => 'ied_plugin_help_editors',
                'type'     => PREF_HIDDEN,
                'position' => 50,
                'default'  => 'textile',
                'group'    => 'ied_plugin_if_settings',
            ),
            'ied_plugin_help_editor_path' => array(
                'html'     => 'text_input',
                'type'     => PREF_HIDDEN,
                'position' => 60,
                'default'  => hu.'js/',
                'group'    => 'ied_plugin_if_settings',
            ),
            'ied_plugin_help_editor_options' => array(
                'html'     => 'textarea',
                'type'     => PREF_HIDDEN,
                'position' => 70,
                'default'  => 'theme_advanced_toolbar_location : "top",
    theme_advanced_buttons1 : "bold,italic,underline,strikethrough,forecolor,backcolor,removeformat,numlist,bullist,outdent,indent,justifyleft,justifycenter,justifyright,justifyfull",
    theme_advanced_buttons2 : "link,unlink,separator,ibrowser,separator,search,replace,separator,cut,copy,paste,separator,code,separator,formatselect",
    theme_advanced_buttons3 : ""',
                'group'    => 'ied_plugin_if_settings',
            ),
            'ied_plugin_interface_elems' => array(
                'html'     => 'checkboxset',
                'type'     => PREF_HIDDEN,
                'position' => 80,
                'content'  => array('distribution' => 'ied_plugin_if_el_dist', 'style' => 'ied_plugin_if_el_style'),
                'default'  => 'style',
                'group'    => 'ied_plugin_if_settings',
            ),
            'ied_plugin_lifecycle_options' => array(
                'html'     => 'checkboxset',
                'type'     => PREF_HIDDEN,
                'position' => 90,
                'content'  => array('installed' => 'ied_plugin_lbl_lc_install', 'enabled' => 'ied_plugin_lbl_lc_enable', 'disabled' => 'ied_plugin_lbl_lc_disable', 'deleted' => 'ied_plugin_lbl_lc_delete'),
                'default'  => '',
                'group'    => 'ied_plugin_prefs',
            ),
            'ied_plugin_auto_enable' => array(
                'html'     => 'radioset',
                'type'     => PREF_HIDDEN,
                'position' => 100,
                'content'  => array('0' => gTxt('no'), '1' => gTxt('yes'), '2' => gTxt('ied_plugin_same')),
                'default'  => '2',
                'group'    => 'ied_plugin_prefs',
            ),
            'ied_plugin_syntax_check' => array(
                'html'     => 'yesnoradio',
                'type'     => PREF_HIDDEN,
                'position' => 110,
                'default'  => '1',
                'group'    => 'ied_plugin_prefs',
            ),
            'ied_plugin_lang_choose' => array(
                'html'     => 'ied_plugin_lang_options',
                'type'     => PREF_HIDDEN,
                'position' => 120,
                'default'  => 'installed',
                'group'    => 'ied_plugin_prefs',
            ),
            'ied_plugin_lang_default' => array(
                'html'     => 'ied_plugin_lang_default',
                'type'     => PREF_HIDDEN,
                'position' => 130,
                'default'  => '',
                'group'    => 'ied_plugin_prefs',
            ),
            'ied_plugin_output_order' => array(
                'html'     => 'radioset',
                'type'     => PREF_HIDDEN,
                'position' => 140,
                'content'  => array('0' => gTxt('ied_plugin_lbl_op_code_first'), '1' => gTxt('ied_plugin_lbl_op_help_first')),
                'default'  => '0',
                'group'    => 'ied_plugin_prefs',
            ),
            'ied_plugin_output_sfile' => array(
                'html'     => 'text_input',
                'type'     => PREF_HIDDEN,
                'position' => 150,
                'default'  => '{name}_v{version}.txt',
                'group'    => 'ied_plugin_prefs',
            ),
            'ied_plugin_output_sfilec' => array(
                'html'     => 'text_input',
                'type'     => PREF_HIDDEN,
                'position' => 160,
                'default'  => '{name}_v{version}_zip.txt',
                'group'    => 'ied_plugin_prefs',
            ),
            'ied_plugin_output_sfilep' => array(
                'html'     => 'text_input',
                'type'     => PREF_HIDDEN,
                'position' => 170,
                'default'  => '{name}_v{version}.php',
                'group'    => 'ied_plugin_prefs',
            ),
            'ied_plugin_output_sfilet' => array(
                'html'     => 'text_input',
                'type'     => PREF_HIDDEN,
                'position' => 180,
                'default'  => '{name}_v{version}_{lang}_textpack.txt',
                'group'    => 'ied_plugin_prefs',
            ),
            'ied_plugin_output_tmpcache' => array(
                'html'     => 'text_input',
                'type'     => PREF_HIDDEN,
                'position' => 190,
                'default'  => $tempdir,
                'group'    => 'ied_plugin_prefs',
            ),
        );

        return $ied_pc_prefs;
    }
}

/**
 * Add prefs callbacks to global scope, since create_pref() can't take
 * array/object syntax.
 *
 * @see  https://forum.textpattern.io/viewtopic.php?pid=298188#p298188
 */
if (txpinterface === 'admin') {
    /**
     * List of supported javascript syntax highlighter / code editors.
     *
     * NB: no i18n since these are the names of the projects.
     *
     * @param  string $name Preference name
     * @param  string $val  Current preference value
     * @return string       HTML
     */
    function ied_plugin_code_editors($name, $val = '')
    {
        $eds['none'] = gTxt('none');
        $eds['edit_area'] = 'EditArea';
        $eds['codemirror'] = 'CodeMirror';
        $eds['codepress'] = 'CodePress';

        return selectInput($name, $eds, $val, false);
    }

    /**
     * List of supported javascript help editors.
     *
     * NB: no i18n since these are the names of the projects.
     *
     * @param  string $name Preference name
     * @param  string $val  Current preference value
     * @return string       HTML
     */
    function ied_plugin_help_editors($name, $val = '')
    {
        $eds['textilee'] = 'Textile';
        $eds['tiny_mce'] = 'TinyMCE';

        return selectInput($name, $eds, $val, false);
    }

    /**
     * List of language options.
     *
     * @param  string $name Preference name
     * @param  string $val  Current preference value
     * @return string       HTML
     */
    function ied_plugin_lang_options($name, $val = '')
    {
        $lngs['installed'] = gTxt('ied_plugin_langs_installed');
        $lngs['all'] = gTxt('ied_plugin_langs_all');

        return selectInput($name, $lngs, $val, false);
    }

    /**
     * Complete list of supported languages.
     *
     * @param  string $name Preference name
     * @param  string $val  Current preference value
     * @return string       HTML
     */
    function ied_plugin_lang_default($name, $val = '')
    {
        $langs = array_merge(array('' => gTxt('ied_plugin_any')), ied_pc::lang_list('all'));

        return selectInput($name, $langs, $val, false);
    }
}
# --- END PLUGIN CODE ---
if (0) {
?>
<!--
# --- BEGIN PLUGIN HELP ---
h1. ied_plugin_composer

Create, publish and edit plugins from within Textpattern CMS.

Creates a new page under the __Extensions__ tab where you can edit and export plugins that are already installed in Textpattern, as well as create or upload new plugins created by the community.

h2. Features

* Create, edit, upload or install plugin code and documentation, then publish your wares in the standard Textpattern plugin format.
* Full support for the official zem_tpl.php plugin template and the modified "code first" version by net-carver, which also incorporates a 'style' segment for your help text (although it should be rarely needed).
* Optional syntax checker to protect the site / admin side from bad code.
* Export plugins in a variety of formats, allowing you to switch between editing in the plugin composer or your favourite editing program. You can export:
** a standard BASE64-encoded text file.
** a gzipped version (useful for large plugins).
** a php file in the standard template format.
** Textpacks on their own -- any combination of languages.
* Support for all plugin types: Library, Public, and Admin (with or without AJAX).
* Specify a recommended plugin load order if your plugin needs special powers.
* Documentation can be written in Textile or HTML.
* Take advantage of the "TinyMCE WYSIWYG editor":https://forum.textpattern.io/viewtopic.php?id=13089 for the help section, or a variety of javascript syntax highlighters / editors for code. See the "setup":#ied_plugin_setup section for more on the available editors.
* Built-in Textile help viewer (thanks to net-carver's Plugin Help Viewer) to allow you to preview your Help text during development.
* Set a code "restore point" and roll back to that point if things go sideways. Also useful for returning plugin source code to its as-installed state.

h2. Installation and uninstallation

*Requires Textpattern 4.6.0+*

Download the plugin (v0.5 and above) from "stefdawson.com":http://stefdawson.com/ied_plugin_composer, paste the code into Textpattern's _Admin->Plugins_ page, install and enable the plugin.

The default preferences are automatically created when you install the plugin or visit the setup screen, by clicking the *Setup* button in the top right corner of the _Extensions->Plugin composer_ panel. See the "setup section":#ied_plugin_setup for details.

To remove the plugin composer (noooo!) simply delete it as normal from the _Admin->Plugins_ panel. All the preferences will automatically be removed as well. NOTE: deleting the plugin from the plugin composer window itself *will not* delete the preferences unless you have set the plugin to respond to 'delete' lifecycle events.

Alternatively, this plugin can be installed using "Composer":https://getcomposer.org:

bc. $ composer require bloke/ied_plugin_composer:*

h2(#ied_plugin_list). List panel

At the top of the main page is a collapsible area labelled @Installation@. This is dealt with in the "Creating plugins":#ied_plugin_create section; the rest of the page lists all installed plugins. The columns are:

; *Plugin*
: Click the plugin name to "edit":#ied_plugin_edit it. If the plugin has preferences associated with it, you will also see an *[Options]* link.
; *Author*
: If available, click the author to visit their site.
; *Version (Modified)*
: Shows the current version number and whether the plugin has been modified from when it was either created or installed. If it has, you can click the version number to restore the plugin code to its installed state or last "restore point":#ied_plugin_restore.
; *Description*
: A brief one-line overview of what the plugin does.
; *Publish*
: Three links
:: _Publish_ : exports the plugin as a .txt file for distribution to other Textpattern users.
:: _Zip_ : exports the plugin as a compressed (gzipped) .txt file for distribution.
:: _Help_ : displays the (textile processed) plugin documentation, if there is any.
: All these tasks (and more) can be performed from the "edit panel":#ied_plugin_edit.
; *Order*
: The recommended plugin load order from 1 (loaded first) to 9 (loaded last). 5 is default.
: Note that if using the plugin cache directory this feature is _only available if the @$plugin['order']@ string is in the template to begin with._ So if your load order keeps returning to '5', edit your template directly to add that string, or paste your plugin into the relevant parts of the "empty plugin template":https://github.com/textpattern/textpattern-plugin-template/blob/master/zem_plugin.php and upload it.
; *Active*
: Enable or disable a plugin by clicking entries in this column -- this will only trigger any enabled/disabled lifecycle event in your plugin if you have set the plugin to do so.

Use the multi-edit checkboxes (you can shift click them to select more than one at a time) to delete plugins or make mass changes. Deletion will only trigger the 'deleted' lifecycle event if you have told the composer to allow plugins to respond to lifecycle events.

If you are using the plugin_cache_dir (_Admin->Advanced Prefs_), any plugins in the standard template format uploaded to this directory will be available immediately for editing and testing. You can edit and publish the plugins in the same manner as the regular, installed plugins above, with the following exceptions:

* There is no concept of 'modified' or of restore points as the files always represent the most up-to-date version. Use your own external versioning.
* Cached plugins are "always on" and do not need to be installed. To deactivate the plugin the file must be removed from the plugin cache directory.
* It follows that the lifecycle notification events (installed, deleted, enabled, disabled) are not triggered from plugins in the cache directory.
* The recommended load order cannot be changed from the list panel; it can only be altered via the "edit panel":#ied_plugin_edit. The specified load order is only written to the file when the plugin is exported. Load order is alphabetical for all plugins in the plugin_cache directory.

h2(#ied_plugin_create). Creating, installing and naming plugins

There are a few ways of creating plugins from the composer's list panel. Expand the 'Installation' twisty at the top of the composer's list panel to see them all.

The first is to create a blank, empty plugin; use the first text box for this and the *Create new plugin* button. Points to note:

* If you use a standard plugin name (e.g. @abc_my_plugin@) it will be created in the database.
* If you add @.php@ to the plugin name, it will be created in the plugin cache directory in the standard template format.
* Avoid specifying the version of the plugin in the name -- you should use the **Rename file** or **Export** options in the "edit panel":#ied_plugin_edit to alter the filename into your preferred filename format (see "setup":#ied_plugin_setup).

The second method of creating a plugin is to upload one using the Browse/upload box. Please note:

* You can upload code as either:
** a standard plugin base64 .txt file.
** a standard plugin template (either code-first or help-first, complete with CSS areas).
** a PHP file containing raw code only.
* The plugin will always be installed in the database when using this method (upload template plugins manually via FTP or create a new one with a .php extension and paste the code into it if you want it in the plugin cache).
* If the plugin exists it will be updated with your new info.
* This is the only place you can upload raw PHP with @<?php ?>@ markers. Everywhere else you should use a full template.
* If you add a plugin Name in the box above the upload widget before clicking *Upload*, your plugin will take that name.

You may also install a plugin just like on the _Admin->Plugins_ panel by copying and pasting the contents of a standard plugin .txt file into the Install textarea and hitting the *Install* button. Note there are a few differences from the core's installer:

* There is no preview step; the plugin is installed immediately, so be sure you trust the code!
* You can choose whether the plugin is allowed to run its 'install' lifecycle event by using the radio buttons that appear.
* You can elect to have the plugin auto-enable itself by selecting the appropriate radio button entry prior to clicking _Install_.
* The radio buttons take on the default settings from the "setup panel":#ied_plugin_setup.

By convention, every plugin should be created with a three-letter prefix, an underscore, then the name of the plugin. You are free to choose your own three-letter prefix (usually your initials) subject to "avoiding ones already taken by other plugin authors":https://docs.textpattern.io/development/plugin-developer-prefixes so people can get to know your work. Plus, it groups your plugins together in the "plugin respository":http://textpattern.org/plugins. All functions, variables (including DOM nodes), CSS classes, Textpack strings and anything else you inject into the global scope should be prefixed by *at least* your three letter code; preferably the whole plugin name (or abridged version thereof) to avoid namespace clashes with your own and other plugins.

h2(#ied_plugin_edit). Edit panel

This panel is where you craft your masterpiece. It is divided into various sections and boxes. The _Panels_ area allows you to switch between the various parts of the plugin. Each plugin has:

* Meta content such as name, version, and flags.
* PHP code.
* Textpack strings.
* Documentation / styling.

You edit each part separately to reduce on-screen clutter, and when you switch subpanels your selection is remembered so that panel appears when editing other plugins. Hitting *Save* commits changes from the whole page -- including subpanels that aren't currently visible.

h3. Meta subpanel

; *Name*
: The name of your plugin, which you can change at any time. Note that if you are editing a file from the plugin cache directory and the @$plugin['name']@ row is commented out in the file, you will not be able to change the plugin name; it will always be the name of the file.
; *Version*
: The current version of your plugin. You are free to choose your own versioning convention.
: To the right of these boxes will be some optional items that appear depending on the current mode of operation:
:: *Restore point* (in-database plugins only): selecting this checkbox will (upon clicking the *Save* button) store the current code as a baseline to which you may "roll back" to at a later date. See "restore points":#ied_plugin_restore.
:: *Rename file* (cache_dir plugins only): by default, when you save a file in the plugin cache directory, it is overwritten with your changes. Once a plugin is released you would normally keep a copy, taken from the plugin_cache_dir, for safekeeping. If you then subsequently modify the plugin and increase the version number, you may wish to alter the filename as well. Checking this box will (upon clicking the *Save* button) rename the file in the plugin cache directory to reflect the current version number. See the "setup panel":#ied_plugin_setup for details on customising the filename format.
:: *Enable* (in-database plugins only): switch the plugin on or off after Save.
:: *(file name)* (cache_dir plugins only) : the current filename you are editing.
; *Description*
: Very brief one-liner describing your plugin's core function / reason for existence. 255 characters maximum.
; *Author* :
: You!
; *Website*
: Your home page or plugin page. Will be hyperlinked to your Author name in the "list panel":#ied_plugin_list.
; *Plugin type*
: Choose one of the types that best fits the intended use of your plugin. If you choose 'Public' and try to access the admin side in your code, a warning will be issued when the plugin is saved so you can choose a more appropriate type.
; *Flags*
: Choose which plugin flags are to be associated with the plugin:
:: *Has prefs* : check this to indicate your plugin responds to the _plugin_prefs.your_plugin_name_ event.
:: *Event notify* : check this to indicate your plugin responds to the _plugin_lifecycle.your_plugin_name_ event/steps.
; *Load order*
: Choose the recommended order in which you think your plugin should be loaded by users. Most of the time, the default of '5' is fine, but for special cases where your plugin has to set up an environment or has to wait for other plugins to load first, you might require one of the numbers either side. Be aware that this is a _recommendation_ and is overridable by the site administrator. If the plugin is already deployed on a site, the load order that is already set will be used regardless of the setting of this value; only new installations will be set to this value by default.

h3. Plugin code

Your plugin code goes here. Write your masterpiece and either click the main *Save* button (which saves everything: code, help, meta data, etc) or if you are simply updating just the code portion, use the *Save code* button at the top-right of the subpanel for rapid background saving. During this save process, the textarea dims to show it is working, though you can still continue to type if you wish. When the textarea returns to full visibility, it means the save process is complete. Your code is (optionally) run through a rudimentary syntax checker when using the *Save Code* button and any error is highlighted. %(warning)If a syntax error is detected, your plugin is not saved%.

Plugins are limited to 16Mb of code so there is also a character countdown just below the edit box. If you start approaching the limit(!), it might be worth considering splitting your plugin into a few parts or working for Micro$oft, where code bloat is acceptable.

In Firefox, Chrome and IE10+ you can use the _Jump to line:_ textbox. Enter a line number and press Enter to jump to that line in the code. In other browsers, ymmv.

h3. Textpack strings

Before Textpattern 4.3.0, any time you displayed a plugin-specific string to the user it made sense to write your own @gTxt()@ function which packaged up the strings into one area of your plugin. While convenient, this meant that anyone who wanted to use your plugin in another lanugage had to edit the plugin code and rewrite your strings into the target language, which caused upgrade hassles.

This is no longer an issue, as Textpattern now has Textpacks: redistributable text files that contain language strings for direct insertion into the database.

p(warning). A word of caution: the Textpack area works a little differently to the rest of the edit panel: most changes happen live as you type.

Before you begin you need to define a textpack prefix for the plugin. This is usually your three letter plugin prefix plus some unique identifier with which all strings in use by the plugin will begin. For example, the plugin composer uses @ied_plugin@ (though it could have used @ied_pcomp@ or @ied_pc@, etc). Note that using just your three letter prefix is probably not wise because your own future plugins might require a similarly-named replacement and the strings would clash. Of course, you might want to take advantage of this feature!

Once you enter the prefix and your cursor leaves the box, the composer will store the prefix and search the plugin code immediately for any references to such prefixed strings inside any function call with @gTxt@ in it. Any it does find will be listed and you can immediately begin entering your replacement text in the currently selected language. Whenever the cursor leaves a text box its contents is saved directly to the database.

Textpack strings can be used on the Admin side, the Public site, or both. Choose the most appropriate location from the dropdown against each string.

If you create or rename a gTxt string in the code, when your cursor leaves the textarea the new string(s) will be created for you in the textpack area at the top of the list. Note however they are not written to the database until you supply a replacement string.

During the process of creating/renaming replacement strings, if it orphans another string then the orphan will be highlighted and an [x] button will appear next to it. If you wish to copy the old content out of the box and paste it into your renamed string, now is the time to do so. Once you're sure you no longer need the string, hit the [x] button to immediately delete it from the database. It will be removed from *all* languages.

Please note:

* if you programmatically refer to strings (e.g. by concatenating string parts together to form the gTxt string name, or iterating over a loop and using variable substitution) then they will _not_ be automatically be detected. You will have to use the '+' button to add such strings manually.
* any programmatically-derived Textpack strings, or ones not inside a gTxt() function will show up with an [x] button. You should of course not delete these strings!
* after you do a full save (i.e. not just a *Save Code*) all strings that are defined for the plugin will be displayed. Any derived strings will still be highlighted as potential orphans.
* switching language from the select list will immediately load strings for that language.
* clicking *Load* does the same task as switching language and is there in case you only have one language installed or wish to refresh the strings in the current language.

h4. Importing strings from the current plugin

The success of the automatic find facility relies on two things:

* that the strings are all prefixed.
* your plugin's Type is one of the AJAX types (4 or 5).

If you're converting an old plugin to the Textpack methodology then you may have hundreds of strings that would be a bind to copy one by one. The composer can try to help you out, but it only works if you have a function or method in your plugin where the strings are replaced and returned. If you don't have that, now might be the time to do so to save yourself some effort! It doesn't have to be referenced in the code, it just has to exist and return a string for a given name.

Once you have that in place, here are some steps you can go through to convert your plugin and grab all the necessary strings en masse:

# inside your plugin's gTxt() function, ensure that all keys are prefixed with your nominated plugin prefix.
# globally replace any reference to @abc_plugin_gTxt('@ with @abc_plugin_gTxt('abc_prefix_@, if not already.
# save the plugin from the composer window.
# enter the Textpack prefix if it's not already set.
# give the name of your gTxt function, e.g. @ied_plugin_gTxt@ in the __Load strings from function__ box. If your @gTxt()@ method is inside a class, specify @class_name::method_name@ instead.
# hit 'Go'.

If the composer can execute your chosen function then it'll do so and return the strings as defined inside the function, populate each Textpack string and save it for you in the database automatically. Once that's done and all strings are populated you can then:

# globally replace any calls to @abc_plugin_gTxt@ with the core @gTxt@ in your plugin code.
# delete your abc_plugin_gTxt function.

Textpack strings are also written to the file of any plugin you are editing in the cache_dir when you Save the plugin, as long as you are using a recent template that has the @$plugin['textpack']@ string in it.

*Switching language*

If at any time you want to see the installed textpack strings in other languages, simply use the select list to choose one. Any defined strings will be loaded into the textpack fields. You'll see a counter whizzing up to show you how far it's gone. As a translation aid, the equivalent string in your nominated default language (see "setup":#ied_plugin_setup) will be displayed as you hover over the textpack entry. You can choose to translate strings yourself or you can defer translation to other members of the community after the plugin is published. Textpacks can be linked to your textpattern.org plugin page by contributors and installed at any time from Textpattern's _Admin->Languages_ tab.

h3. Plugin help

Documentation for detailing the plugin usage. Can (probably should!) be written using "Textile":http://textpattern.com/textile-sandbox. There are some "documentation guidelines":https://docs.textpattern.io/development/plugin-user-help-guidelines that serve as a good starting point. Note that the character countdown here is only approximate because when your plugin is saved and the help is converted to HTML, it usually takes up more space than Textile; please check that your help file renders correctly when your plugin is exported.

The _Style_ box is for any CSS style rules you wish to apply to your documentation, although you should not need this with modern admin themes. You are encouraged to reuse the admin's core CSS rules as often as possible, but if there isn't one that suits, it's best to target your documentation specifically by surrounding the entire Plugin Help section with something like: @<div id="abc_help">h1. Docs go here...</div>@.

Note that both the Plugin Help and Style are governed by a size limit. Since they are both stored in the same 64KB field, the size is shared between them. Styles are _not_ passed through the Textile processor and you don't need to add the @<style>@ tags; the composer will do that for you (but see the "notes":#ied_plugin_notes).

Click the *[Docs]* link alongside the Plugin help heading to show the documentation as users will see it (i.e. Textile processed into HTML). Any help text over 64KB in length is truncated so you can verify that all your documentation fits into the users' destination database.


h3. Distribution

Once you have saved your plugin, there is a section that allows you to export your plugin in a variety of formats. A language select box governs how Textpacks are dealt with. If you choose the first (empty) item then no Textpack information is included in the exported file. The only exception is when you save Textpacks directly: the first item is a shortcut for 'all languages' to save you having to select them all.

* *Plugin code for distribution* : is a direct copy 'n' paste area that contains your entire plugin + docs. You can take this entire area and paste it into the 'Install plugin' box. Since this adds to the time it takes to do a full save of the plugin, this portion is optional and can be enabled from the "setup panel":#ied_plugin_setup.
* *Export as abc_myplugin.txt* : converts the plugin help to HTML and saves the plugin to your computer as a redistributable text file for other Textpattern users to install. If you have chosen any Textpack languages from the adjacent select list, they will be bundled with your plugin and thus installed automatically if the language matches the one in use by the administrator who installs the plugin.
* *Export as abc_myplugin.txt (compressed)* : converts the plugin help to HTML and saves the plugin as a redistributable, gzipped text file for other Textpattern users to install. Useful for large plugins or to offer an alternative for people who have stringent size limits imposed by their host. Textpack strings are bundled too if you have chosen at least one language from the select list.
* *Export as abc_myplugin.php* : saves the plugin in a Textpattern standard template format. Useful for keeping the plugin for yourself -- complete with Textiled help markup -- so it can be later edited and re-issued / updated or shared with other developers who have the plugin composer or zem_tpl.php compiler. Textpack strings are bundled as part of the template if you choose.
* *Export Textpack(s)* : choose one or more languages from the select list to gather all your plugin's Textpack strings and download them as a redistributable text file for other textpattern users to install or modify. You (or anyone else) will (one day) be able to upload links to Textpacks on textpattern.org so they are available from a central location.

Note that when exporting as a standard plugin, the Textile processor attempts to decide if you have used Textile or not; it simply looks for a textiled header (@h1.@ through @h6.@). Running pure HTML through Textile may occasionally cause encoding issues depending on the original character set used, so it is always best to try and stick to Textile as the documentation system.

h2(#ied_plugin_restore). Restore points

When a plugin is installed, a copy is kept in the database. If the plugin code (not help text) is subsequently edited, the plugin is considered "modified"; indicated in the plugin composer's "list panel":#ied_plugin_list. Sometimes you may wish to revert any changes back to the as-installed state.

Any time a plugin is marked as 'modified', the version number becomes clickable from the "list panel":#ied_plugin_list. Clicking it (and confirming you are sure) will wipe out any changes you made and return the plugin to its installed state.

During the editing process of your own plugins, it may be that at certain times you wish to put a stake in the ground and say "this is my current baseline that I might want to return to later". Perhaps you are about to make some major edits or try something experimental and want an easy fallback mechanism. That's where the "Restore point" checkbox comes in.

By checking the box when you fully save your plugin, the current code will become your new rollback point and the plugin will no longer be marked "modified". Any changes made beforehand will not be recoverable so you will have to rely on your own backups if you wish to go back further. Any edits you make after creating a restore point can be undone by visiting the "list panel":#ied_plugin_list and clicking the version number next to your plugin. Currently, only one rollback point can be stored in the database. Note that the "Restore point" checkbox is ignored during saving of meta data only, since you are not saving any code.

h2(#ied_plugin_setup). Setup panel

Clicking Setup from the main "list panel":#ied_plugin_list allows access to the plugin settings.

; *Plugin editor*
: You may choose to edit the code using a 3rd party syntax highlighter. Current support is for EditArea, CodeMirror and CodePress.
: Choose the system here, and specify the URL(s) of the scripts and stylesheets in the box beneath. If your chosen editor requires more than one file to be loaded then list them all, separated by commas. If any of the files are stylesheets, prefix the name with @css:@ so the plugin knows to insert a @<link rel="stylesheet" ...>@ instead of a @<script>@ tag.
: If you want to supply any configuration options to the editor, type them in the *Plugin editor configuration options* textarea. Write them as name:value pairs separated by comma, exactly as you would if initialisaing the script according to their documentation.
; *Plugin editor width*
: The size of the textareas on the "edit panel":#ied_plugin_edit. Set to suit your screen resolution. Include the units (px, em, %, etc) if you wish; it'll default to pixels if you omit them.
; *Help editor*
: You may choose to edit the help manually via Textile or use TinyMCE for a more WYSIWYG experience.
: In a similar manner to the plugin code editor you need to tell the composer the URL to the javascript file. You can also supply configuration options. The defaults should give you a head start on how to use them: consult the TinyMCE documentation for more.
; *Optional interface elements*
: Choose which parts of the "edit panel":#ied_plugin_edit you want to be visible in the interface.
; *Perform lifecycle actions on*
: When plugins are installed, enabled, disabled or deleted, plugins can run code to perform installation or cleanup actions. Choose which ones you wish to permit when installing, enabling/disabling or deleting plugins from the composer's "list panel":#ied_plugin_list.
: The value of the 'install' checkbox chosen here becomes the default option in the _Perform post-install actions_ radio button in the _Installation_ subpanel.
; *Auto-enable plugins on install*
: Whether to allow plugins to automatically switch on after installation, or to retain their previous status.
: The setting chosen here becomes the default radio button selection under the _Install_ textarea on the "list panel":#ied_plugin_list.
; *Syntax check on code save*
: Whether to run the code through the syntax checker or not when you use the *Save Code* button. Highly recommended to save your admin side from breakage during development.
; *Textpack language list*
: Whether to only allow editing of strings from the currently installed languages, or all available Textpattern languages.
; *Default Textpack language*
: The primary language for your plugin strings (default = any). If you choose a language that is not installed (and you're limiting the language list to only those installed) the default language will revert to your current admin-side language.
: Note that if you set a language here, when you export Textpacks or build plugins, that will be the language expected to be installed in a user's Textpattern. If you leave it at 'any', the language marker is omitted from the Textpack and thus the strings bundled with the plugin (which may be in English) will install into whichever language is the user's default (which may be something other than English). By forcing the default language, you force the language marker in the plugin. Thus if your users don't have that language installed (e.g. someone only has nl-nl installed and not English) and they install your plugin, it will look at the installed language (nl-nl), compare it to the one in the plugin (en-gb), find it doesn't match and will skip the Textpack installation. This will leave the user's interface with lots of ugly @abc_plugin_some_item@ strings instead of the actual translated content.
: This could be handy if you are distributing Textpacks separately and have a good stock of them, or have loads of Textpacks bundled with the plugin, but for 95% of cases it is best to leave the default textpack language at @Any@ so users of your plugin are guaranteed to get some translated strings, even if they are not in their 'local' language. They can then at least translate them and make the Textpack available to other users.
; *PHP export order*
: When saving your plugin in the standard template format, this governs whether you prefer the code block to be at the top of the file and the help block below, or vice versa.
; *Export plugin filename format*
; *Export compressed filename format*
; *Export template filename format*
; *Textpack filename format*
: These define the format of the filenames when you export plugins/Textpacks. The first is for when you export standard BASE-64 plugins; the second is for compressed plugins; the third is for exporting a standard PHP template, and finally for exporting Textpacks.
: Wherever you type @{name}@, the plugin name will appear. Similarly, @{version}@ will be replaced with the current plugin version number. And @{lang}@ will be replaced with either 1) the chosen language code, like en-gb; 2) 'all' if you chose to export all textpacks as one file; 3) an abbreviated list of countries to which the languages in the pack apply if you choose to export more than one, e.g. @en+fi+nl+fr+de@.
: You can type anything you like in these boxes, but it's more useful to include the replacement strings somewhere in each box so you don't get name / version clashes. For example, if you don't like the fact that zipped plugins are exported as @pfx_my_plugin_v0.1_zip.txt@, you can change it. Perhaps you may prefer @pfx_my_plugin-compressed-0.1.txt@. In which case, set the 2nd box to @{name}-compressed-{version}.txt@.
: Note the extension should usually be specified so your system/browser knows the file's type when it is exported, but it's not mandatory as the MIME type is given, so (good) browsers should read that.
; *Cache Textiled help path*
: If you wish to take advantage of help cacheing, put the path to a temporary directory in the box. Empty the box if you prefer saves and exports to be slower!
: Defaults to Textpattern's temporary directory.

h2(#ied_plugin_notes). Notes / known issues

# When a plugin is saved to the plugin_cache_dir, if you have not put @<style>@ markers in your CSS block they will be added for you in the text area but _not_ saved in the actual template until you save it again (exporting as a PHP file is unaffected). So if you are in the habit of manually downloading the file from your FTP client immediately after a save, just save the plugin again to be sure.
# Loading Textpack strings from a gTxt function won't work unless you (perhaps temporarily) switch your plugin to one of the AJAX types.

h2. Writing a plugin

You should be aware of the "Plugin Author Resources":https://forum.textpattern.io/viewtopic.php?id=9881 topic on the Textpattern Support Forum, and you might also want to have a look at the tutorials and guides for "Plugin development":https://docs.textpattern.io/development/ in the Textpattern documentation.

Happy plugin authoring :-)

h2. Authors

Original plugin: Yura Linnyk
Modifications (v0.5+): "Stef Dawson":http://stefdawson.com/commentForm
A touch of class: Steve Dickinson
Plus help from a plethora of forum contributors too numerous to mention. You know who you are, thank you ;-)
# --- END PLUGIN HELP ---
-->
<?php
}
?>
