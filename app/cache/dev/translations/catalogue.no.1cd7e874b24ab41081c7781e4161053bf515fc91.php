<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('no', array (
  'validators' => 
  array (
    'This value should be false.' => 'Verdien må være usann.',
    'This value should be true.' => 'Verdien må være sann.',
    'This value should be of type {{ type }}.' => 'Verdien må være av typen {{ type }}.',
    'This value should be blank.' => 'Verdien må være blank.',
    'The value you selected is not a valid choice.' => 'Den valgte verdien er ikke gyldig.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du må velge minst {{ limit }} valg.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan maks velge {{ limit }} valg.',
    'One or more of the given values is invalid.' => 'En eller flere av de oppgitte verdiene er ugyldige.',
    'This field was not expected.' => 'Dette feltet var ikke forventet.',
    'This field is missing.' => 'Dette feltet mangler.',
    'This value is not a valid date.' => 'Verdien er ikke en gyldig dato.',
    'This value is not a valid datetime.' => 'Verdien er ikke en gyldig dato/tid.',
    'This value is not a valid email address.' => 'Verdien er ikke en gyldig e-postadresse.',
    'The file could not be found.' => 'Filen kunne ikke finnes.',
    'The file is not readable.' => 'Filen er ikke lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor ({{ size }} {{ suffix }}). Tilatte maksimale størrelse {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mimetypen av filen er ugyldig ({{ type }}). Tilatte mimetyper er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Verdien må være {{ limit }} tegn lang eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Verdien er for lang. Den må ha {{ limit }} tegn eller mindre.',
    'This value should be {{ limit }} or more.' => 'Verdien må være {{ limit }} eller mer.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Verdien er for kort. Den må ha {{ limit }} tegn eller flere.',
    'This value should not be blank.' => 'Verdien må ikke være blank.',
    'This value should not be null.' => 'Verdien må ikke være tom (null).',
    'This value should be null.' => 'Verdien må være tom (null).',
    'This value is not valid.' => 'Verdien er ikke gyldig.',
    'This value is not a valid time.' => 'Verdien er ikke en gyldig tid.',
    'This value is not a valid URL.' => 'Verdien er ikke en gyldig URL.',
    'The two values should be equal.' => 'Verdiene må være identiske.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor. Den maksimale størrelsen er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen er for stor.',
    'The file could not be uploaded.' => 'Filen kunne ikke lastes opp.',
    'This value should be a valid number.' => 'Verdien må være et gyldig tall.',
    'This file is not a valid image.' => 'Denne filen er ikke et gyldig bilde.',
    'This is not a valid IP address.' => 'Dette er ikke en gyldig IP adresse.',
    'This value is not a valid language.' => 'Verdien er ikke et gyldig språk.',
    'This value is not a valid locale.' => 'Verdien er ikke en gyldig lokalitet.',
    'This value is not a valid country.' => 'Verdien er ikke et gyldig navn på land.',
    'This value is already used.' => 'Verdien er allerede brukt.',
    'The size of the image could not be detected.' => 'Bildestørrelsen kunne ikke oppdages.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Bildebredden er for stor ({{ width }} piksler). Tillatt maksimumsbredde er {{ max_width }} piksler.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Bildebredden er for liten ({{ width }} piksler). Forventet minimumsbredde er {{ min_width }} piksler.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bildehøyden er for stor ({{ height }} piksler). Tillatt maksimumshøyde er {{ max_height }} piksler.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Bildehøyden er for liten ({{ height }} piksler). Forventet minimumshøyde er {{ min_height }} piksler.',
    'This value should be the user\'s current password.' => 'Verdien må være brukerens sitt nåværende passord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Verdien må være nøyaktig {{ limit }} tegn.',
    'The file was only partially uploaded.' => 'Filen var kun delvis opplastet.',
    'No file was uploaded.' => 'Ingen fil var lastet opp.',
    'No temporary folder was configured in php.ini.' => 'Den midlertidige mappen (tmp) er ikke konfigurert i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikke skrive midlertidig fil til disk.',
    'A PHP extension caused the upload to fail.' => 'En PHP-utvidelse forårsaket en feil under opplasting.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samlingen må inneholde {{ limit }} element eller flere.|Denne samlingen må inneholde {{ limit }} elementer eller flere.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samlingen må inneholde {{ limit }} element eller færre.|Denne samlingen må inneholde {{ limit }} elementer eller færre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samlingen må inneholde nøyaktig {{ limit }} element.|Denne samlingen må inneholde nøyaktig {{ limit }} elementer.',
    'Invalid card number.' => 'Ugyldig kortnummer.',
    'Unsupported card type or invalid card number.' => 'Korttypen er ikke støttet eller ugyldig kortnummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dette er ikke en gyldig IBAN.',
    'This value is not a valid ISBN-10.' => 'Verdien er ikke en gyldig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Verdien er ikke en gyldig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Verdien er hverken en gyldig ISBN-10 eller ISBN-13.',
    'This value is not a valid ISSN.' => 'Verdien er ikke en gyldig ISSN.',
    'This value is not a valid currency.' => 'Verdien er ikke gyldig valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Verdien må være lik {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Verdien må være større enn {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Verdien må være større enn eller lik {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Verdien må være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Verdien må være mindre enn {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Verdien må være mindre enn eller lik {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Verdien må ikke være lik {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Verdien må ikke være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Bildeforholdet er for stort ({{ ratio }}). Tillatt maksimumsbildeforhold er {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Bildeforholdet er for lite ({{ ratio }}). Forventet maksimumsbildeforhold er {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Bildet er en kvadrat ({{ width }}x{{ height }}px). Kvadratiske bilder er ikke tillatt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Bildet er i liggende retning ({{ width }}x{{ height }}px). Bilder i liggende retning er ikke tillatt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Bildet er i stående retning ({{ width }}x{{ height }}px). Bilder i stående retning er ikke tillatt.',
    'An empty file is not allowed.' => 'Tomme filer er ikke tilatt.',
    'The host could not be resolved.' => 'Vertsnavn kunne ikke løses.',
    'This value does not match the expected {{ charset }} charset.' => 'Verdien samsvarer ikke med forventet tegnsett {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dette er ikke en gyldig BIC.',
    'This form should not contain extra fields.' => 'Feltgruppen må ikke inneholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den opplastede filen var for stor. Vennligst last opp en mindre fil.',
    'The CSRF token is invalid.' => 'CSRF nøkkelen er ugyldig.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En autentiseringsfeil har skjedd.',
    'Authentication credentials could not be found.' => 'Påloggingsinformasjonen kunne ikke bli funnet.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiserings forespørselen kunne ikke bli prosessert grunnet en system feil.',
    'Invalid credentials.' => 'Ugyldig påloggingsinformasjonen.',
    'Cookie has already been used by someone else.' => 'Cookie har allerede blitt brukt av noen andre.',
    'Not privileged to request the resource.' => 'Ingen tilgang til å be om gitt ressurs.',
    'Invalid CSRF token.' => 'Ugyldig CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce er utløpt.',
    'No authentication provider found to support the authentication token.' => 'Ingen autentiserings tilbyder funnet som støtter gitt autentiserings token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen sesjon tilgjengelig, sesjonen er enten utløpt eller cookies ikke skrudd på.',
    'No token could be found.' => 'Ingen token kunne bli funnet.',
    'Username could not be found.' => 'Brukernavn kunne ikke bli funnet.',
    'Account has expired.' => 'Brukerkonto har utgått.',
    'Credentials have expired.' => 'Påloggingsinformasjon har utløpt.',
    'Account is disabled.' => 'Brukerkonto er deaktivert.',
    'Account is locked.' => 'Brukerkonto er sperret.',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administrasjon',
    'action_delete' => 'Slett',
    'btn_batch' => 'OK',
    'btn_create' => 'Opprett',
    'btn_create_and_edit_again' => 'Lagre',
    'btn_create_and_create_a_new_one' => 'Lagre og legg til ny',
    'btn_create_and_return_to_list' => 'Lagre og returner til liste',
    'btn_filter' => 'Filtrer',
    'btn_advanced_filters' => 'Avanserte filter',
    'btn_update' => 'Oppdater',
    'btn_update_and_edit_again' => 'Oppdater og rediger videre',
    'btn_update_and_return_to_list' => 'Oppdater og returner til liste',
    'link_delete' => 'Slett',
    'link_action_create' => 'Lag ny',
    'link_action_list' => 'Returner til liste',
    'link_action_show' => 'Vis',
    'link_action_edit' => 'Endre',
    'link_add' => 'Legg til ny',
    'link_list' => 'Liste',
    'link_reset_filter' => 'Tøm filter',
    'title_create' => 'Lag ny',
    'title_dashboard' => 'Dashboard',
    'title_edit' => 'Endre "%name%"',
    'title_list' => 'Liste',
    'link_next_pager' => 'Neste',
    'link_previous_pager' => 'Forrige',
    'link_first_pager' => 'Første',
    'link_last_pager' => 'Siste',
    'Admin' => 'Admin',
    'link_expand' => 'utvid/skjul',
    'no_result' => 'Ingen treff',
    'confirm_msg' => 'Er du sikker?',
    'action_edit' => 'Endre',
    'action_show' => 'Vis',
    'all_elements' => 'Alle element',
    'flash_batch_empty' => 'Handling kansellert. Ingen objekt ble valgt.',
    'flash_create_success' => 'Objekt "%name%" har blitt opprettet',
    'flash_create_error' => 'Det skjedde en feil under oppretting av "%name%".',
    'flash_edit_success' => 'Objekt "%name%" Har blitt oppdatert',
    'flash_edit_error' => 'Det skjedde en feil under oppdatering av "%name%".',
    'flash_lock_error' => 'flash_lock_error',
    'flash_batch_delete_success' => 'Valgte objekt har blitt slettet',
    'flash_batch_delete_error' => 'Det oppstod en feil under sletting av objekter',
    'flash_delete_error' => 'Det oppstod en feil under sletting av objektet "%name%".',
    'flash_delete_success' => 'Objektet "%name%" har blitt slettet',
    'form_not_available' => 'form_not_available',
    'breadcrumb.link_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Bekreft sletting',
    'message_delete_confirmation' => 'Er du sikker på at du vil slette det valgte objektet"%object%" ?',
    'btn_delete' => 'Ja, slett',
    'title_batch_confirmation' => 'Bekreft flerhandling: \'%action%\'',
    'message_batch_confirmation' => 'Er du sikker på at du vil bekrefte denne handlingen og utføre den for det valgte elementet?|Er du sikker på at du vil bekrefte denne handlingen og utføre den for de %count% valgte elementene?',
    'message_batch_all_confirmation' => 'Er du sikker på at du vil bekrefte denne handlingen for alle elementene?',
    'btn_execute_batch_action' => 'Ja, utfør',
    'label_type_yes' => 'Ja',
    'label_type_no' => 'Nei',
    'label_type_contains' => 'inneholder',
    'label_type_not_contains' => 'inneholder ikke',
    'label_type_equals' => 'er lik som',
    'label_type_not_equals' => 'er ikke lik som',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'er tom',
    'label_date_type_not_null' => 'er ikke tom',
    'label_date_type_between' => 'mellom',
    'label_date_type_not_between' => 'ikke mellom',
    'label_filters' => 'Filter',
    'delete_or' => 'eller',
    'link_action_history' => 'Revisjoner',
    'td_action' => 'Handling',
    'td_compare' => 'Sammenlign',
    'td_revision' => 'Revisjoner',
    'td_timestamp' => 'Dato',
    'td_username' => 'Bruker',
    'td_role' => 'Rolle',
    'label_view_revision' => 'Se revisjon',
    'label_compare_revision' => 'Sammenlign revisjoner',
    'list_results_count_prefix' => 'minimum',
    'list_results_count' => '1 resultat|%count% resultat',
    'label_export_download' => 'Last ned',
    'export_format_json' => 'JSON',
    'export_format_xml' => 'XML',
    'export_format_csv' => 'CSV',
    'export_format_xls' => 'XLS',
    'loading_information' => 'Laster informasjon…',
    'btn_preview' => 'Forhondsvis',
    'btn_preview_approve' => 'Godkjenn',
    'btn_preview_decline' => 'Avvis',
    'label_per_page' => 'Per side',
    'list_select' => 'Velg',
    'confirm_exit' => 'Du har ulagrede endringer.',
    'link_edit_acl' => 'Endre ACL',
    'btn_update_acl' => 'Oppdater ACL',
    'flash_acl_edit_success' => 'ACL har blitt endret.',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'Ingen utvalg',
    'title_search_results' => 'Søkeresultat: %query%',
    'search_placeholder' => 'Søk',
    'no_results_found' => 'Ingen resultat funnet',
    'add_new_entry' => 'Legg til ny',
    'link_actions' => 'Handlinger',
    'noscript_warning' => 'Javascript er skrudd av i din nettleser. Noen funksjoner vil ikke virke.',
    'message_form_group_empty' => 'Ingen felt tilgjengelige',
    'link_filters' => 'Filter',
    'stats_view_more' => 'stats_view_more',
    'title_select_subclass' => 'Velg objekttype',
    'no_subclass_available' => 'Ingen objektttyper er tilgjengelige',
    'label_unknown_user' => 'label_unknown_user',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administration',
    'action_delete' => 'Delete',
    'btn_batch' => 'OK',
    'btn_create' => 'Create',
    'btn_create_and_edit_again' => 'Create',
    'btn_create_and_create_a_new_one' => 'Create and add another',
    'btn_create_and_return_to_list' => 'Create and return to list',
    'btn_filter' => 'Filter',
    'btn_advanced_filters' => 'Advanced filters',
    'btn_update' => 'Update',
    'btn_update_and_edit_again' => 'Update',
    'btn_update_and_return_to_list' => 'Update and close',
    'link_delete' => 'Delete',
    'link_action_create' => 'Add new',
    'link_action_list' => 'Return to list',
    'link_action_show' => 'Show',
    'link_action_edit' => 'Edit',
    'link_add' => 'Add new',
    'link_list' => 'List',
    'link_reset_filter' => 'Reset',
    'title_create' => 'Create',
    'title_dashboard' => 'Dashboard',
    'title_edit' => 'Edit "%name%"',
    'title_list' => 'List',
    'link_next_pager' => 'Next',
    'link_previous_pager' => 'Previous',
    'link_first_pager' => 'First',
    'link_last_pager' => 'Last',
    'Admin' => 'Admin',
    'link_expand' => 'expand/collapse',
    'no_result' => 'No result',
    'confirm_msg' => 'Are you sure ?',
    'action_edit' => 'Edit',
    'action_show' => 'Show',
    'all_elements' => 'All elements',
    'flash_batch_empty' => 'Action aborted. No items were selected.',
    'flash_create_success' => 'Item "%name%" has been successfully created.',
    'flash_create_error' => 'An error has occurred during the creation of item "%name%".',
    'flash_edit_success' => 'Item "%name%" has been successfully updated.',
    'flash_edit_error' => 'An error has occurred during update of item "%name%".',
    'flash_lock_error' => 'Another user has modified item "%name%". Please %link_start%click here%link_end% to reload the page and apply the changes again.',
    'flash_batch_delete_success' => 'Selected items have been successfully deleted.',
    'flash_batch_delete_error' => 'An Error has occurred during selected items deletion.',
    'flash_delete_error' => 'An Error has occurred during deletion of item "%name%".',
    'flash_delete_success' => 'Item "%name%" has been deleted successfully.',
    'form_not_available' => 'Form is not available.',
    'breadcrumb.link_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Confirm deletion',
    'message_delete_confirmation' => 'Are you sure you want to delete the selected "%object%" element?',
    'btn_delete' => 'Yes, delete',
    'title_batch_confirmation' => 'Confirm batch action \'%action%\'',
    'message_batch_confirmation' => 'Are you sure you want to confirm this action and execute it for the selected element?|Are you sure you want to confirm this action and execute it for the %count% selected elements?',
    'message_batch_all_confirmation' => 'Are you sure you want to confirm this action and execute it for all the elements?',
    'btn_execute_batch_action' => 'Yes, execute',
    'label_type_yes' => 'yes',
    'label_type_no' => 'no',
    'label_type_contains' => 'contains',
    'label_type_not_contains' => 'does not contain',
    'label_type_equals' => 'is equal to',
    'label_type_not_equals' => 'is not equal to',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'is empty',
    'label_date_type_not_null' => 'is not empty',
    'label_date_type_between' => 'between',
    'label_date_type_not_between' => 'not between',
    'label_filters' => 'Filters',
    'delete_or' => 'or',
    'link_action_history' => 'Revisions',
    'td_action' => 'Action',
    'td_compare' => 'Compare',
    'td_revision' => 'Revisions',
    'td_timestamp' => 'Date',
    'td_username' => 'Author',
    'td_role' => 'Role',
    'label_view_revision' => 'View Revision',
    'label_compare_revision' => 'Compare revision',
    'list_results_count_prefix' => 'at least',
    'list_results_count' => '1 result|%count% results',
    'label_export_download' => 'Download',
    'export_format_json' => 'JSON',
    'export_format_xml' => 'XML',
    'export_format_csv' => 'CSV',
    'export_format_xls' => 'XLS',
    'loading_information' => 'Loading information…',
    'btn_preview' => 'Preview',
    'btn_preview_approve' => 'Approve',
    'btn_preview_decline' => 'Decline',
    'label_per_page' => 'Per page',
    'list_select' => 'Select',
    'confirm_exit' => 'You have unsaved changes.',
    'link_edit_acl' => 'Edit ACL',
    'btn_update_acl' => 'Update ACL',
    'flash_acl_edit_success' => 'ACL has been successfuly updated.',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'No selection',
    'title_search_results' => 'Search results: %query%',
    'search_placeholder' => 'Search',
    'no_results_found' => 'no result found',
    'add_new_entry' => 'add new entry',
    'link_actions' => 'Actions',
    'noscript_warning' => 'Javascript is disabled in your web browser. Some features will not work properly.',
    'message_form_group_empty' => 'No fields available.',
    'link_filters' => 'Filters',
    'stats_view_more' => 'View more',
    'title_select_subclass' => 'Select object type',
    'no_subclass_available' => 'No object types available',
    'label_unknown_user' => 'unknown',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Add new',
    'label_type_yes' => 'yes',
    'label_type_no' => 'no',
    'sonata_core_template_box_file_found_in' => 'This file can be found in',
    'label_type_equals' => 'is equal to',
    'label_type_not_equals' => 'is not equal to',
    'date_range_start' => 'From',
    'date_range_end' => 'To',
    'aliceblue' => 'AliceBlue',
    'antiquewhite' => 'AntiqueWhite',
    'aqua' => 'Aqua',
    'aquamarine' => 'Aquamarine',
    'azure' => 'Azure',
    'beige' => 'Beige',
    'bisque' => 'Bisque',
    'black' => 'Black',
    'blanchedalmond' => 'BlanchedAlmond',
    'blue' => 'Blue',
    'blueviolet' => 'BlueViolet',
    'brown' => 'Brown',
    'burlywood' => 'BurlyWood',
    'cadetblue' => 'CadetBlue',
    'chartreuse' => 'Chartreuse',
    'chocolate' => 'Chocolate',
    'coral' => 'Coral',
    'cornflowerblue' => 'CornflowerBlue',
    'cornsilk' => 'Cornsilk',
    'crimson' => 'Crimson',
    'cyan' => 'Cyan',
    'darkblue' => 'DarkBlue',
    'darkcyan' => 'DarkCyan',
    'darkgoldenrod' => 'DarkGoldenRod',
    'darkgray' => 'DarkGray',
    'darkgreen' => 'DarkGreen',
    'darkkhaki' => 'DarkKhaki',
    'darkmagenta' => 'DarkMagenta',
    'darkolivegreen' => 'DarkOliveGreen',
    'darkorange' => 'DarkOrange',
    'darkorchid' => 'DarkOrchid',
    'darkred' => 'DarkRed',
    'darksalmon' => 'DarkSalmon',
    'darkseagreen' => 'DarkSeaGreen',
    'darkslateblue' => 'DarkSlateBlue',
    'darkslategray' => 'DarkSlateGray',
    'darkturquoise' => 'DarkTurquoise',
    'darkviolet' => 'DarkViolet',
    'deeppink' => 'DeepPink',
    'deepskyblue' => 'DeepSkyBlue',
    'dimgray' => 'DimGray',
    'dodgerblue' => 'DodgerBlue',
    'firebrick' => 'FireBrick',
    'floralwhite' => 'FloralWhite',
    'forestgreen' => 'ForestGreen',
    'fuchsia' => 'Fuchsia',
    'gainsboro' => 'Gainsboro',
    'ghostwhite' => 'GhostWhite',
    'gold' => 'Gold',
    'goldenrod' => 'GoldenRod',
    'gray' => 'Gray',
    'green' => 'Green',
    'greenyellow' => 'GreenYellow',
    'honeydew' => 'HoneyDew',
    'hotpink' => 'HotPink',
    'indianred' => 'IndianRed',
    'indigo' => 'Indigo',
    'ivory' => 'Ivory',
    'khaki' => 'Khaki',
    'lavender' => 'Lavender',
    'lavenderblush' => 'LavenderBlush',
    'lawngreen' => 'LawnGreen',
    'lemonchiffon' => 'LemonChiffon',
    'lightblue' => 'LightBlue',
    'lightcoral' => 'LightCoral',
    'lightcyan' => 'LightCyan',
    'lightgoldenrodyellow' => 'LightGoldenRodYellow',
    'lightgray' => 'LightGray',
    'lightgreen' => 'LightGreen',
    'lightpink' => 'LightPink',
    'lightsalmon' => 'LightSalmon',
    'lightseagreen' => 'LightSeaGreen',
    'lightskyblue' => 'LightSkyBlue',
    'lightslategray' => 'LightSlateGray',
    'lightsteelblue' => 'LightSteelBlue',
    'lightyellow' => 'LightYellow',
    'lime' => 'Lime',
    'limegreen' => 'LimeGreen',
    'linen' => 'Linen',
    'magenta' => 'Magenta',
    'maroon' => 'Maroon',
    'mediumaquamarine' => 'MediumAquaMarine',
    'mediumblue' => 'MediumBlue',
    'mediumorchid' => 'MediumOrchid',
    'mediumpurple' => 'MediumPurple',
    'mediumseagreen' => 'MediumSeaGreen',
    'mediumslateblue' => 'MediumSlateBlue',
    'mediumspringgreen' => 'MediumSpringGreen',
    'mediumturquoise' => 'MediumTurquoise',
    'mediumvioletred' => 'MediumVioletRed',
    'midnightblue' => 'MidnightBlue',
    'mintcream' => 'MintCream',
    'mistyrose' => 'MistyRose',
    'moccasin' => 'Moccasin',
    'navajowhite' => 'NavajoWhite',
    'navy' => 'Navy',
    'oldlace' => 'OldLace',
    'olive' => 'Olive',
    'olivedrab' => 'OliveDrab',
    'orange' => 'Orange',
    'orangered' => 'OrangeRed',
    'orchid' => 'Orchid',
    'palegoldenrod' => 'PaleGoldenRod',
    'palegreen' => 'PaleGreen',
    'paleturquoise' => 'PaleTurquoise',
    'palevioletred' => 'PaleVioletRed',
    'papayawhip' => 'PapayaWhip',
    'peachpuff' => 'PeachPuff',
    'peru' => 'Peru',
    'pink' => 'Pink',
    'plum' => 'Plum',
    'powderblue' => 'PowderBlue',
    'purple' => 'Purple',
    'rebeccapurple' => 'RebeccaPurple',
    'red' => 'Red',
    'rosybrown' => 'RosyBrown',
    'royalblue' => 'RoyalBlue',
    'saddlebrown' => 'SaddleBrown',
    'salmon' => 'Salmon',
    'sandybrown' => 'SandyBrown',
    'seagreen' => 'SeaGreen',
    'seashell' => 'SeaShell',
    'sienna' => 'Sienna',
    'silver' => 'Silver',
    'skyblue' => 'SkyBlue',
    'slateblue' => 'SlateBlue',
    'slategray' => 'SlateGray',
    'snow' => 'Snow',
    'springgreen' => 'SpringGreen',
    'steelblue' => 'SteelBlue',
    'tan' => 'Tan',
    'teal' => 'Teal',
    'thistle' => 'Thistle',
    'tomato' => 'Tomato',
    'turquoise' => 'Turquoise',
    'violet' => 'Violet',
    'wheat' => 'Wheat',
    'white' => 'White',
    'whitesmoke' => 'WhiteSmoke',
    'yellow' => 'Yellow',
    'yellowgreen' => 'YellowGreen',
  ),
  'SonataBlockBundle' => 
  array (
    'sonata.block.container' => 'Container',
    'sonata.block.text' => 'Simple text',
    'sonata.block.rss' => 'RSS feed',
    'sonata.block.menu' => 'Menu',
    'sonata.block.template' => 'Template',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
