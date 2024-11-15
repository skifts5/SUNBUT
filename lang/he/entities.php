<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'נוצר לאחרונה',
    'recently_created_pages' => 'דפים שנוצרו לאחרונה',
    'recently_updated_pages' => 'דפים שעודכנו לאחרונה',
    'recently_created_chapters' => 'פרקים שנוצרו לאחרונה',
    'recently_created_books' => 'ספרים שנוצרו לאחרונה',
    'recently_created_shelves' => 'מדפים שנוצרו לאחרונה',
    'recently_update' => 'עודכן לאחרונה',
    'recently_viewed' => 'נצפה לאחרונה',
    'recent_activity' => 'פעילות לאחרונה',
    'create_now' => 'צור אחד כעת',
    'revisions' => 'עדכונים',
    'meta_revision' => 'עדכון #:revisionCount',
    'meta_created' => 'נוצר :timeLength',
    'meta_created_name' => 'נוצר :timeLength על ידי :user',
    'meta_updated' => 'עודכן :timeLength',
    'meta_updated_name' => 'עודכן :timeLength על ידי :user',
    'meta_owned_name' => 'Owned by :user',
    'meta_reference_count' => 'Referenced by :count item|Referenced by :count items',
    'entity_select' => 'בחר יישות',
    'entity_select_lack_permission' => 'You don\'t have the required permissions to select this item',
    'images' => 'תמונות',
    'my_recent_drafts' => 'הטיוטות האחרונות שלי',
    'my_recently_viewed' => 'הנצפים לאחרונה שלי',
    'my_most_viewed_favourites' => 'My Most Viewed Favourites',
    'my_favourites' => 'המועדפים שלי',
    'no_pages_viewed' => 'לא צפית בדפים כלשהם',
    'no_pages_recently_created' => 'לא נוצרו דפים לאחרונה',
    'no_pages_recently_updated' => 'לא עודכנו דפים לאחרונה',
    'export' => 'ייצוא',
    'export_html' => 'דף אינטרנט',
    'export_pdf' => 'קובץ PDF',
    'export_text' => 'טקסט רגיל',
    'export_md' => 'קובץ Markdown',
    'default_template' => 'Default Page Template',
    'default_template_explain' => 'Assign a page template that will be used as the default content for all pages created within this item. Keep in mind this will only be used if the page creator has view access to the chosen template page.',
    'default_template_select' => 'Select a template page',

    // Permissions and restrictions
    'permissions' => 'הרשאות',
    'permissions_desc' => 'Set permissions here to override the default permissions provided by user roles.',
    'permissions_book_cascade' => 'Permissions set on books will automatically cascade to child chapters and pages, unless they have their own permissions defined.',
    'permissions_chapter_cascade' => 'Permissions set on chapters will automatically cascade to child pages, unless they have their own permissions defined.',
    'permissions_save' => 'שמור הרשאות',
    'permissions_owner' => 'בעלים',
    'permissions_role_everyone_else' => 'Everyone Else',
    'permissions_role_everyone_else_desc' => 'Set permissions for all roles not specifically overridden.',
    'permissions_role_override' => 'Override permissions for role',
    'permissions_inherit_defaults' => 'Inherit defaults',

    // Search
    'search_results' => 'תוצאות חיפוש',
    'search_total_results_found' => ':count תוצאות נמצאו|:count סה״כ תוצאות',
    'search_clear' => 'נקה חיפוש',
    'search_no_pages' => 'לא נמצאו דפים התואמים לחיפוש',
    'search_for_term' => 'חפש את :term',
    'search_more' => 'תוצאות נוספות',
    'search_advanced' => 'חיפוש מתקדם',
    'search_terms' => 'מילות חיפוש',
    'search_content_type' => 'סוג התוכן',
    'search_exact_matches' => 'התאמות מדויקות',
    'search_tags' => 'חפש בתגים',
    'search_options' => 'אפשרויות',
    'search_viewed_by_me' => 'נצפו על ידי',
    'search_not_viewed_by_me' => 'שלא נצפו על ידי',
    'search_permissions_set' => 'סט הרשאות',
    'search_created_by_me' => 'שנוצרו על ידי',
    'search_updated_by_me' => 'שעודכנו על ידי',
    'search_owned_by_me' => 'בבעלות שלי',
    'search_date_options' => 'אפשרויות תאריך',
    'search_updated_before' => 'שעודכנו לפני',
    'search_updated_after' => 'שעודכנו לאחר',
    'search_created_before' => 'שנוצרו לפני',
    'search_created_after' => 'שנוצרו לאחר',
    'search_set_date' => 'הגדר תאריך',
    'search_update' => 'עדכן חיפוש',

    // Shelves
    'shelf' => 'מדף',
    'shelves' => 'מדפים',
    'x_shelves' => ':count מדף|:count מדפים',
    'shelves_empty' => 'לא נוצרו מדפים',
    'shelves_create' => 'צור מדף חדש',
    'shelves_popular' => 'מדפים פופולרים',
    'shelves_new' => 'מדפים חדשים',
    'shelves_new_action' => 'מדף חדש',
    'shelves_popular_empty' => 'המדפים הפופולריים ביותר יופיעו כאן',
    'shelves_new_empty' => 'המדפים שנוצרו לאחרונה יופיעו כאן',
    'shelves_save' => 'שמור מדף',
    'shelves_books' => 'ספרים במדף זה',
    'shelves_add_books' => 'הוסף ספרים למדף זה',
    'shelves_drag_books' => 'Drag books below to add them to this shelf',
    'shelves_empty_contents' => 'במדף זה לא קיימים ספרים',
    'shelves_edit_and_assign' => 'עריכת מדף להוספת ספרים',
    'shelves_edit_named' => 'Edit Shelf :name',
    'shelves_edit' => 'Edit Shelf',
    'shelves_delete' => 'Delete Shelf',
    'shelves_delete_named' => 'Delete Shelf :name',
    'shelves_delete_explain' => "This will delete the shelf with the name ':name'. Contained books will not be deleted.",
    'shelves_delete_confirmation' => 'Are you sure you want to delete this shelf?',
    'shelves_permissions' => 'Shelf Permissions',
    'shelves_permissions_updated' => 'Shelf Permissions Updated',
    'shelves_permissions_active' => 'Shelf Permissions Active',
    'shelves_permissions_cascade_warning' => 'Permissions on shelves do not automatically cascade to contained books. This is because a book can exist on multiple shelves. Permissions can however be copied down to child books using the option found below.',
    'shelves_permissions_create' => 'Shelf create permissions are only used for copying permissions to child books using the action below. They do not control the ability to create books.',
    'shelves_copy_permissions_to_books' => 'העתק הרשאות מדף אל הספרים',
    'shelves_copy_permissions' => 'העתק הרשאות',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this shelf to all books contained within. Before activating, ensure any changes to the permissions of this shelf have been saved.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => 'ספר',
    'books' => 'ספרים',
    'x_books' => ':count ספר|:count ספרים',
    'books_empty' => 'לא נוצרו ספרים',
    'books_popular' => 'ספרים פופולריים',
    'books_recent' => 'ספרים אחרונים',
    'books_new' => 'ספרים חדשים',
    'books_new_action' => 'ספר חדש',
    'books_popular_empty' => 'הספרים הפופולריים יופיעו כאן',
    'books_new_empty' => 'הספרים שנוצרו לאחרונה יופיעו כאן',
    'books_create' => 'צור ספר חדש',
    'books_delete' => 'מחק ספר',
    'books_delete_named' => 'מחק ספר :bookName',
    'books_delete_explain' => 'פעולה זו תמחק את הספר :bookName, כל הדפים והפרקים ימחקו גם כן.',
    'books_delete_confirmation' => 'האם ברצונך למחוק את הספר הזה?',
    'books_edit' => 'ערוך ספר',
    'books_edit_named' => 'עריכת ספר :bookName',
    'books_form_book_name' => 'שם הספר',
    'books_save' => 'שמור ספר',
    'books_permissions' => 'הרשאות ספר',
    'books_permissions_updated' => 'הרשאות הספר עודכנו',
    'books_empty_contents' => 'לא נוצרו פרקים או דפים עבור ספר זה',
    'books_empty_create_page' => 'צור דף חדש',
    'books_empty_sort_current_book' => 'מיין את הספר הנוכחי',
    'books_empty_add_chapter' => 'הוסף פרק',
    'books_permissions_active' => 'הרשאות ספר פעילות',
    'books_search_this' => 'חפש בספר זה',
    'books_navigation' => 'ניווט בספר',
    'books_sort' => 'מיין את תוכן הספר',
    'books_sort_desc' => 'Move chapters and pages within a book to reorganise its contents. Other books can be added which allows easy moving of chapters and pages between books.',
    'books_sort_named' => 'מיין את הספר :bookName',
    'books_sort_name' => 'מיין לפי שם',
    'books_sort_created' => 'מיין לפי תאריך יצירה',
    'books_sort_updated' => 'מיין לפי תאריך עדכון',
    'books_sort_chapters_first' => 'פרקים בהתחלה',
    'books_sort_chapters_last' => 'פרקים בסוף',
    'books_sort_show_other' => 'הצג ספרים אחרונים',
    'books_sort_save' => 'שמור את הסדר החדש',
    'books_sort_show_other_desc' => 'Add other books here to include them in the sort operation, and allow easy cross-book reorganisation.',
    'books_sort_move_up' => 'Move Up',
    'books_sort_move_down' => 'Move Down',
    'books_sort_move_prev_book' => 'Move to Previous Book',
    'books_sort_move_next_book' => 'Move to Next Book',
    'books_sort_move_prev_chapter' => 'Move Into Previous Chapter',
    'books_sort_move_next_chapter' => 'Move Into Next Chapter',
    'books_sort_move_book_start' => 'Move to Start of Book',
    'books_sort_move_book_end' => 'Move to End of Book',
    'books_sort_move_before_chapter' => 'Move to Before Chapter',
    'books_sort_move_after_chapter' => 'Move to After Chapter',
    'books_copy' => 'העתק ספר',
    'books_copy_success' => 'ספר הועתק בהצלחה',

    // Chapters
    'chapter' => 'פרק',
    'chapters' => 'פרקים',
    'x_chapters' => ':count פרק|:count פרקים',
    'chapters_popular' => 'פרקים פופולריים',
    'chapters_new' => 'פרק חדש',
    'chapters_create' => 'צור פרק חדש',
    'chapters_delete' => 'מחק פרק',
    'chapters_delete_named' => 'מחק את פרק :chapterName',
    'chapters_delete_explain' => 'This will delete the chapter with the name \':chapterName\'. All pages that exist within this chapter will also be deleted.',
    'chapters_delete_confirm' => 'האם ברצונך למחוק פרק זה?',
    'chapters_edit' => 'ערוך פרק',
    'chapters_edit_named' => 'ערוך פרק :chapterName',
    'chapters_save' => 'שמור פרק',
    'chapters_move' => 'העבר פרק',
    'chapters_move_named' => 'העבר פרק :chapterName',
    'chapters_copy' => 'העתק פרק',
    'chapters_copy_success' => 'פרק הועתק בהצלחה',
    'chapters_permissions' => 'הרשאות פרק',
    'chapters_empty' => 'לא נמצאו דפים בפרק זה.',
    'chapters_permissions_active' => 'הרשאות פרק פעילות',
    'chapters_permissions_success' => 'הרשאות פרק עודכנו',
    'chapters_search_this' => 'חפש בפרק זה',
    'chapter_sort_book' => 'Sort Book',

    // Pages
    'page' => 'דף',
    'pages' => 'דפים',
    'x_pages' => ':count דף|:count דפים',
    'pages_popular' => 'דפים פופולריים',
    'pages_new' => 'דף חדש',
    'pages_attachments' => 'קבצים מצורפים',
    'pages_navigation' => 'ניווט בדף',
    'pages_delete' => 'מחק דף',
    'pages_delete_named' => 'מחק דף :pageName',
    'pages_delete_draft_named' => 'מחק טיוטת דף :pageName',
    'pages_delete_draft' => 'מחק טיוטת דף',
    'pages_delete_success' => 'הדף נמחק',
    'pages_delete_draft_success' => 'טיוטת דף נמחקה',
    'pages_delete_warning_template' => 'This page is in active use as a book or chapter default page template. These books or chapters will no longer have a default page template assigned after this page is deleted.',
    'pages_delete_confirm' => 'האם ברצונך למחוק דף זה?',
    'pages_delete_draft_confirm' => 'האם ברצונך למחוק את טיוטת הדף הזה?',
    'pages_editing_named' => 'עריכת דף :pageName',
    'pages_edit_draft_options' => 'אפשרויות טיוטה',
    'pages_edit_save_draft' => 'שמור טיוטה',
    'pages_edit_draft' => 'ערוך טיוטת דף',
    'pages_editing_draft' => 'עריכת טיוטה',
    'pages_editing_page' => 'עריכת דף',
    'pages_edit_draft_save_at' => 'טיוטה נשמרה ב ',
    'pages_edit_delete_draft' => 'מחק טיוטה',
    'pages_edit_delete_draft_confirm' => 'Are you sure you want to delete your draft page changes? All of your changes, since the last full save, will be lost and the editor will be updated with the latest page non-draft save state.',
    'pages_edit_discard_draft' => 'התעלם מהטיוטה',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_switch_to_new_wysiwyg' => 'Switch to new WYSIWYG',
    'pages_edit_switch_to_new_wysiwyg_desc' => '(In Alpha Testing)',
    'pages_edit_set_changelog' => 'הגדר יומן שינויים',
    'pages_edit_enter_changelog_desc' => 'ציין תיאור קצר אודות השינויים שביצעת',
    'pages_edit_enter_changelog' => 'הכנס יומן שינויים',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'שמור דף',
    'pages_title' => 'כותרת דף',
    'pages_name' => 'שם הדף',
    'pages_md_editor' => 'עורך',
    'pages_md_preview' => 'תצוגה מקדימה',
    'pages_md_insert_image' => 'הכנס תמונה',
    'pages_md_insert_link' => 'הכנס קישור ליישות',
    'pages_md_insert_drawing' => 'הכנס סרטוט',
    'pages_md_show_preview' => 'Show preview',
    'pages_md_sync_scroll' => 'Sync preview scroll',
    'pages_drawing_unsaved' => 'Unsaved Drawing Found',
    'pages_drawing_unsaved_confirm' => 'Unsaved drawing data was found from a previous failed drawing save attempt. Would you like to restore and continue editing this unsaved drawing?',
    'pages_not_in_chapter' => 'דף אינו חלק מפרק',
    'pages_move' => 'העבר דף',
    'pages_copy' => 'העתק דף',
    'pages_copy_desination' => 'העתק יעד',
    'pages_copy_success' => 'הדף הועתק בהצלחה',
    'pages_permissions' => 'הרשאות דף',
    'pages_permissions_success' => 'הרשאות הדף עודכנו',
    'pages_revision' => 'נוסח',
    'pages_revisions' => 'נוסחי דף',
    'pages_revisions_desc' => 'Listed below are all the past revisions of this page. You can look back upon, compare, and restore old page versions if permissions allow. The full history of the page may not be fully reflected here since, depending on system configuration, old revisions could be auto-deleted.',
    'pages_revisions_named' => 'נוסחי דף עבור :pageName',
    'pages_revision_named' => 'נוסח דף עבור :pageName',
    'pages_revision_restored_from' => 'Restored from #:id; :summary',
    'pages_revisions_created_by' => 'נוצר על ידי',
    'pages_revisions_date' => 'תאריך נוסח',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Revision Number',
    'pages_revisions_numbered' => 'נוסח #:id',
    'pages_revisions_numbered_changes' => 'שינויי נוסח #:id',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'יומן שינויים',
    'pages_revisions_changes' => 'שינויים',
    'pages_revisions_current' => 'גירסא נוכחית',
    'pages_revisions_preview' => 'תצוגה מקדימה',
    'pages_revisions_restore' => 'שחזר',
    'pages_revisions_none' => 'לדף זה אין נוסחים',
    'pages_copy_link' => 'העתק קישור',
    'pages_edit_content_link' => 'Jump to section in editor',
    'pages_pointer_enter_mode' => 'Enter section select mode',
    'pages_pointer_label' => 'Page Section Options',
    'pages_pointer_permalink' => 'Page Section Permalink',
    'pages_pointer_include_tag' => 'Page Section Include Tag',
    'pages_pointer_toggle_link' => 'Permalink mode, Press to show include tag',
    'pages_pointer_toggle_include' => 'Include tag mode, Press to show permalink',
    'pages_permissions_active' => 'הרשאות דף פעילות',
    'pages_initial_revision' => 'פרסום ראשוני',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => 'דף חדש',
    'pages_editing_draft_notification' => 'הינך עורך טיוטה אשר נשמרה לאחרונה ב :timeDiff',
    'pages_draft_edited_notification' => 'דף זה עודכן מאז, מומלץ להתעלם מהטיוטה הזו.',
    'pages_draft_page_changed_since_creation' => 'העמוד התעדכן מאז שהטיוטה נוצרה. מומלץ לבטל את הטיוטה או לשים לב לא לדרוס שינויים בעמוד.',
    'pages_draft_edit_active' => [
        'start_a' => ':count משתמשים החלו לערוך דף זה',
        'start_b' => ':userName החל לערוך דף זה',
        'time_a' => 'מאז שהדף עודכן לאחרונה',
        'time_b' => 'ב :minCount דקות האחרונות',
        'message' => ':start :time. יש לשים לב לא לדרוס שינויים של משתמשים אחרים!',
    ],
    'pages_draft_discarded' => 'Draft discarded! The editor has been updated with the current page content',
    'pages_draft_deleted' => 'Draft deleted! The editor has been updated with the current page content',
    'pages_specific' => 'דף ספציפי',
    'pages_is_template' => 'תבנית דף',

    // Editor Sidebar
    'toggle_sidebar' => 'Toggle Sidebar',
    'page_tags' => 'תגיות דף',
    'chapter_tags' => 'תגיות פרק',
    'book_tags' => 'תגיות ספר',
    'shelf_tags' => 'תגיות מדף',
    'tag' => 'תגית',
    'tags' =>  'תגיות',
    'tags_index_desc' => 'Tags can be applied to content within the system to apply a flexible form of categorization. Tags can have both a key and value, with the value being optional. Once applied, content can then be queried using the tag name and value.',
    'tag_name' =>  'שם התווית',
    'tag_value' => 'ערך התגית (אופציונאלי)',
    'tags_explain' => "הכנס תגיות על מנת לסדר את התוכן שלך. \n  ניתן לציין ערך לתגית על מנת לבצע סידור יסודי יותר",
    'tags_add' => 'הוסף תגית נוספת',
    'tags_remove' => 'מחק תווית',
    'tags_usages' => 'Total tag usages',
    'tags_assigned_pages' => 'Assigned to Pages',
    'tags_assigned_chapters' => 'Assigned to Chapters',
    'tags_assigned_books' => 'Assigned to Books',
    'tags_assigned_shelves' => 'Assigned to Shelves',
    'tags_x_unique_values' => ':count unique values',
    'tags_all_values' => 'כל הערכים',
    'tags_view_tags' => 'הצג תוויות',
    'tags_view_existing_tags' => 'View existing tags',
    'tags_list_empty_hint' => 'Tags can be assigned via the page editor sidebar or while editing the details of a book, chapter or shelf.',
    'attachments' => 'קבצים מצורפים',
    'attachments_explain' => 'צרף קבצים או קישורים על מנת להציגם בדף שלך. צירופים אלו יהיו זמינים בתפריט הצדדי של הדף',
    'attachments_explain_instant_save' => 'שינויים נשמרים באופן מיידי',
    'attachments_upload' => 'העלה קובץ',
    'attachments_link' => 'צרף קישור',
    'attachments_upload_drop' => 'Alternatively you can drag and drop a file here to upload it as an attachment.',
    'attachments_set_link' => 'הגדר קישור',
    'attachments_delete' => 'Are you sure you want to delete this attachment?',
    'attachments_dropzone' => 'Drop files here to upload',
    'attachments_no_files' => 'לא הועלו קבצים',
    'attachments_explain_link' => 'ניתן לצרף קישור במקום העלאת קובץ, קישור זה יכול להוביל לדף אחר או לכל קובץ באינטרנט',
    'attachments_link_name' => 'שם הקישור',
    'attachment_link' => 'כתובת הקישור',
    'attachments_link_url' => 'קישור לקובץ',
    'attachments_link_url_hint' => 'כתובת האתר או הקובץ',
    'attach' => 'צרף',
    'attachments_insert_link' => 'Add Attachment Link to Page',
    'attachments_edit_file' => 'ערוך קובץ',
    'attachments_edit_file_name' => 'שם הקובץ',
    'attachments_edit_drop_upload' => 'גרור קבצים או לחץ כאן על מנת להעלות קבצים במקום הקבצים הקיימים',
    'attachments_order_updated' => 'סדר הקבצים עודכן',
    'attachments_updated_success' => 'פרטי הקבצים עודכנו',
    'attachments_deleted' => 'קובץ מצורף הוסר',
    'attachments_file_uploaded' => 'הקובץ עלה בהצלחה',
    'attachments_file_updated' => 'הקובץ עודכן בהצלחה',
    'attachments_link_attached' => 'הקישור צורף לדף בהצלחה',
    'templates' => 'תבניות',
    'templates_set_as_template' => 'הגדר עמוד כתבנית',
    'templates_explain_set_as_template' => 'ניתן להגדיר עמוד כתבנית כך שהתוכן שלו ישומש בעת יצירת עמודים אחרים. משתמשים אחרים יוכלו לראות את התבנית רק אם ברשותם הרשאות צפייה בעמוד הזה.',
    'templates_replace_content' => 'החלף תוכן עמוד',
    'templates_append_content' => 'הוסף בסוף תוכן העמוד',
    'templates_prepend_content' => 'הוסף בתחילת תוכן העמוד',

    // Profile View
    'profile_user_for_x' => 'משתמש במערכת כ :time',
    'profile_created_content' => 'תוכן שנוצר',
    'profile_not_created_pages' => 'המשתמש :userName לא יצר דפים',
    'profile_not_created_chapters' => 'המשתמש :userName לא יצר פרקים',
    'profile_not_created_books' => 'המשתמש :userName לא יצר ספרים',
    'profile_not_created_shelves' => 'המשתמש :userName לא יצר מדפים',

    // Comments
    'comment' => 'תגובה',
    'comments' => 'תגובות',
    'comment_add' => 'הוסף תגובה',
    'comment_placeholder' => 'השאר תגובה כאן',
    'comment_count' => '{0} אין תגובות|{1} 1 תגובה|[2,*] :count תגובות',
    'comment_save' => 'שמור תגובה',
    'comment_new' => 'תגובה חדשה',
    'comment_created' => 'הוגב :createDiff',
    'comment_updated' => 'עודכן :updateDiff על ידי :username',
    'comment_updated_indicator' => 'Updated',
    'comment_deleted_success' => 'התגובה נמחקה',
    'comment_created_success' => 'התגובה נוספה',
    'comment_updated_success' => 'התגובה עודכנה',
    'comment_delete_confirm' => 'האם ברצונך למחוק תגובה זו?',
    'comment_in_reply_to' => 'בתגובה ל :commentId',
    'comment_editor_explain' => 'Here are the comments that have been left on this page. Comments can be added & managed when viewing the saved page.',

    // Revision
    'revision_delete_confirm' => 'האם ברצונך למחוק נוסח זה?',
    'revision_restore_confirm' => 'האם ברצונך לשחזר נוסח זה? תוכן הדף הנוכחי יעודכן לנוסח זה.',
    'revision_cannot_delete_latest' => 'לא ניתן למחוק את הנוסח האחרון',

    // Copy view
    'copy_consider' => 'Please consider the below when copying content.',
    'copy_consider_permissions' => 'Custom permission settings will not be copied.',
    'copy_consider_owner' => 'You will become the owner of all copied content.',
    'copy_consider_images' => 'Page image files will not be duplicated & the original images will retain their relation to the page they were originally uploaded to.',
    'copy_consider_attachments' => 'Page attachments will not be copied.',
    'copy_consider_access' => 'A change of location, owner or permissions may result in this content being accessible to those previously without access.',

    // Conversions
    'convert_to_shelf' => 'Convert to Shelf',
    'convert_to_shelf_contents_desc' => 'You can convert this book to a new shelf with the same contents. Chapters contained within this book will be converted to new books. If this book contains any pages, that are not in a chapter, this book will be renamed and contain such pages, and this book will become part of the new shelf.',
    'convert_to_shelf_permissions_desc' => 'Any permissions set on this book will be copied to the new shelf and to all new child books that don\'t have their own permissions enforced. Note that permissions on shelves do not auto-cascade to content within, as they do for books.',
    'convert_book' => 'Convert Book',
    'convert_book_confirm' => 'Are you sure you want to convert this book?',
    'convert_undo_warning' => 'This cannot be as easily undone.',
    'convert_to_book' => 'Convert to Book',
    'convert_to_book_desc' => 'You can convert this chapter to a new book with the same contents. Any permissions set on this chapter will be copied to the new book but any inherited permissions, from the parent book, will not be copied which could lead to a change of access control.',
    'convert_chapter' => 'Convert Chapter',
    'convert_chapter_confirm' => 'Are you sure you want to convert this chapter?',

    // References
    'references' => 'References',
    'references_none' => 'There are no tracked references to this item.',
    'references_to_desc' => 'Listed below is all the known content in the system that links to this item.',

    // Watch Options
    'watch' => 'Watch',
    'watch_title_default' => 'Default Preferences',
    'watch_desc_default' => 'Revert watching to just your default notification preferences.',
    'watch_title_ignore' => 'Ignore',
    'watch_desc_ignore' => 'Ignore all notifications, including those from user-level preferences.',
    'watch_title_new' => 'New Pages',
    'watch_desc_new' => 'Notify when any new page is created within this item.',
    'watch_title_updates' => 'All Page Updates',
    'watch_desc_updates' => 'Notify upon all new pages and page changes.',
    'watch_desc_updates_page' => 'Notify upon all page changes.',
    'watch_title_comments' => 'All Page Updates & Comments',
    'watch_desc_comments' => 'Notify upon all new pages, page changes and new comments.',
    'watch_desc_comments_page' => 'Notify upon page changes and new comments.',
    'watch_change_default' => 'Change default notification preferences',
    'watch_detail_ignore' => 'Ignoring notifications',
    'watch_detail_new' => 'Watching for new pages',
    'watch_detail_updates' => 'Watching new pages and updates',
    'watch_detail_comments' => 'Watching new pages, updates & comments',
    'watch_detail_parent_book' => 'Watching via parent book',
    'watch_detail_parent_book_ignore' => 'Ignoring via parent book',
    'watch_detail_parent_chapter' => 'Watching via parent chapter',
    'watch_detail_parent_chapter_ignore' => 'Ignoring via parent chapter',
];
