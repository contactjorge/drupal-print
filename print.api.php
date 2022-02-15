<?php

/**
 * @file
 * Main API entry point for the Printer, email and PDF versions.
 *
 * @ingroup print
 */

/**
 * @defgroup print Files
 *
 * Files used by the print module, grouped by sub-module
 *
 * - Printer-friendly pages
 *   - @link print.api.php API @endlink
 *   - @link print.module.php Module main file @endlink
 *   - @link print.pages.inc.php HTML generation @endlink
 *   - @link print.admin.inc.php Settings form @endlink
 *   - @link print.install.php (Un)Install routines @endlink
 *   - @link print.tpl.php Page generation template @endlink
 *   - @link print.views.inc.php Views integration @endlink
 *   - @link print_join_page_counter.inc Views join handler @endlink
 * - Send by email
 *   - @link print_mail.module.php Module main file @endlink
 *   - @link print_mail.inc.php Mail form and send mail routine @endlink
 *   - @link print_mail.admin.inc.php Settings form @endlink
 *   - @link print_mail.install.php (Un)Install routines @endlink
 *   - @link print_mail.views.php Views integration @endlink
 * - PDF version
 *   - @link print_pdf.api.php API @endlink
 *   - @link print_pdf.module.php Module main file @endlink
 *   - @link print_pdf.pages.php PDF generation @endlink
 *   - @link print_pdf.admin.inc.php Settings form @endlink
 *   - @link print_pdf.install.php (Un)Install routines @endlink
 *   - @link print_pdf.drush.inc.php Drush commands @endlink
 *   - @link print_pdf.views.php Views integration @endlink
 *   - PDF library handlers:
 *     - dompdf
 *       - @link print_pdf_dompdf.module Module main file @endlink
 *       - @link print_pdf_dompdf.pages.inc.php PDF generation @endlink
 *       - @link print_pdf_dompdf.admin.inc.php Settings form @endlink
 *       - @link print_pdf_dompdf.install.php (Un)Install routines @endlink
 *       - @link print_pdf_dompdf.drush.inc.php Drush commands @endlink
 *     - mPDF
 *       - @link print_pdf_mpdf.module.php Module main file @endlink
 *       - @link print_pdf_mpdf.pages.inc.php PDF generation @endlink
 *       - @link print_pdf_mpdf.drush.inc.php Drush commands @endlink
 *     - TCPDF
 *       - @link print_pdf_tcpdf.module.php Module main file @endlink
 *       - @link print_pdf_tcpdf.pages.inc.php PDF generation @endlink
 *       - @link print_pdf_tcpdf.admin.inc.php Settings form @endlink
 *       - @link print_pdf_tcpdf.install.php (Un)Install routines @endlink
 *       - @link print_pdf_tcpdf.class.inc.php Auxiliary PHP5 class @endlink
 *       - @link print_pdf_tcpdf.drush.inc.php Drush commands @endlink
 *     - wkhtmltopdf
 *       - @link print_pdf_wkhtmltopdf.module.php Module main file @endlink
 *       - @link print_pdf_wkhtmltopdf.pages.inc.php PDF generation @endlink
 *       - @link print_pdf_wkhtmltopdf.admin.inc.php Settings form @endlink
 *       - @link print_pdf_wkhtmltopdf.install.php (Un)Install routines @endlink
 *       - @link print_pdf_wkhtmltopdf.drush.inc.php Drush commands @endlink
 * - EPUB version
 *   - @link print_epub.api.php API @endlink
 *   - @link print_epub.module Module main file @endlink
 *   - @link print_epub.pages.inc.php EPUB generation @endlink
 *   - @link print_epub.admin.php Settings form @endlink
 *   - @link print_epub.install.php (Un)Install routines @endlink
 *   - @link print_epub.drush.inc.php Drush commands @endlink
 *   - @link print_epub.views.inc Views integration @endlink
 *   - EPUB library handlers:
 *     - phpepub
 *       - @link print_epub_phpepub.module.php Module main file @endlink
 *       - @link print_epub_phpepub.pages.php EPUB generation @endlink
 *       - @link print_epub_phpepub.drush.php Drush commands @endlink
 * - User Interface (Links)
 *   - @link print_ui.api.php API @endlink
 *   - @link print_ui.module.php Module main file @endlink
 *   - @link print_ui.admin.inc.php Settings form @endlink
 */

/**
 * @defgroup print_hooks Hooks
 *
 * Hooks used in the print module
 */

/**
 * @defgroup print_themeable Themeable functions
 *
 * Default theme implementations of the print module
 */

/**
 * @defgroup print_api API
 *
 * Functions that are provided for use by third-party code.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Alters the URL in the URL list.
 *
 * This hook is useful for third-party modules that would prefer to display
 * something other than the naked URL in the URL list (e.g. glossary terms,
 * etc.).
 *
 * @param string $url
 *   The url to be modified.
 *
 * @ingroup print_hooks
 */
function hook_print_url_list_alter(&$url) {
  $url = 'foo';
}

/**
 * @} End of "addtogroup hooks".
 */
