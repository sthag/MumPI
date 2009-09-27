<?php
/**
 * Mumble PHP Interface by Kissaki
 * Released under Creative Commons Attribution-Noncommercial License
 * http://creativecommons.org/licenses/by-nc/3.0/
 * @author Kissaki
 */
/**
 * This is the main language file, containing general strings that will be used in more than one section
 */

	// General Functions
	$txt['edit'] = 'edit.';			// Edit something
	$txt['cancel'] = 'abbrechen';		// Cancel, whatever you're doing (go back to the last page).
	$txt['update'] = 'aktualisieren';		// Update the old item/key/var. Use the entered values as new values.
	$txt['remove'] = 'entfernen';
	
	// General
	$txt['server'] = 'Server';		// Mumble Server
	$txt['info_serverversion'] = 'Server Version: %s';
	$txt['info_scriptexecutiontime'] = 'Script Ausführungszeit: %6.3fms | Speicher-Peak: ~%s kByte';
	$txt['failed'] = 'nicht erfolgreich';
	
	// Account Information
	$txt['email'] = 'E-Mail';
	$txt['username'] = 'Benutzername';
	$txt['password'] = 'Passwort';
	$txt['texture'] = 'Benutzer-Bild';
	$txt['userid'] = 'Benutzer ID';
	
	$txt['texture_none'] = 'kein Bild';
	$txt['texture_set'] = 'Bild gesetzt';
	
	// Profile
	$txt['help_profile_textur'] = 'Dieses Benutzerbild wird in Mumbles Overlay anstatt des/eines Benutzernamens angezeigt, sofern dies in den Einstellungen erlaubt/aktiviert wurde.';
	
	//Errors
	$txt['error_unknowninterface']		= 'Falsche Konfiguration: unbekannter <acronym title="Datenbank">DB</acronym> Interface Typ!';
	$txt['error_db_unknowntype']		= 'Der Datenbanktyp, den du spezifiziert hast (in der Einstellungs- "settings"-Datei) ist nicht verfügbar.';
	$txt['error_noIceExtensionLoaded']	= 'Es scheint, als würde Ihr PHP ohne die geladene Ice Erweiterung laufen.<br/>Bitte konfigurieren Sie PHP so, dass es diese läd.<br/><br/>Ice ist das Bindeglied zwischen <acronym title="Mumble Server">Murmur</acronym> und PHP/dem Interface. Es erlaubt PHP Funktionen von Murmur aufzurufen. Daher wird es unbedingt benötigt.<br/>Für Informationen, wie man es konfiguriert, siehe <a href="http://mumble.sourceforge.net/Ice">mumble.sf.net/Ice</a>.';
	$txt['error_noIceSliceLoaded']		= 'Es scheint Ihr PHP kennt die notwendige slice Datei nicht.<br/>Bitte geben Sie PHP über den slice.ice Konfigurationsparameter die Murmur.ice an.<br/>Für Informationen, wie man es konfiguriert, siehe <a href="http://mumble.sourceforge.net/Ice">mumble.sf.net/Ice</a>.';
	$txt['error_noIce']					= 'Konnte keine Verbindung zu Ice herstellen.<br/>Entweder läuft dein Server nicht oder ohne Ice, weil er falsch eingestellt wurde. Prüfe deine Konfiguration.';
	$txt['unknownserver']				= 'Kein solcher Server gefunden.';
	$txt['error_missing_values']		= 'Es scheint, als seien nicht alle notwendigen Felder ausgefüllt/Werte definiert worden.';
	$txt['iceprofilealreadyloaded'] 	= 'Ice Profil ist bereits geladen!';
	$txt['error_dbmanager_couldnotopenadmins'] = 'Konnte die admins.dat Datei nicht öffnen.';
	$txt['error_invalidTexture']		= 'Ungültige Bilddaten. Bitte überprüfen Sie ihre Bilddatei.';

?>