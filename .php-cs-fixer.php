<?php

declare(strict_types=1);

use PhpCsFixer\Config;

$config = new Config();

$config->setRules([
    // comments
    'single_line_empty_body' => true,
    'single_line_comment_style' => true,
    'single_line_comment_spacing'   => true,
    'multiline_comment_opening_closing' => true,
    'no_trailing_whitespace_in_comment' => true,

    // arrays
    'array_syntax' => true,
    'array_indentation' => true,
    'trim_array_spaces' => true,
    'normalize_index_brace' => true,
    'whitespace_after_comma_in_array' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_multiline_whitespace_around_double_arrow' => true,

    // classes, interfaces, traits
    'ordered_interfaces' => true,
    'ordered_class_elements' => true,
    'no_null_property_initialization' => true,
    'no_blank_lines_after_class_opening' => true,

    // misc
    'line_ending' => true,
    'indentation_type' => true,
    'no_mixed_echo_print' => true,
    'no_extra_blank_lines' => true,
    'normalize_index_brace' => true,
    'statement_indentation' => true,
    'no_trailing_whitespace' => true,
    'no_spaces_around_offset' => true,
    'single_blank_line_at_eof' => true,
    'numeric_literal_separator' => true,
    'compact_nullable_typehint' => true,
    'spaces_inside_parentheses' => true,
    'no_whitespace_in_blank_line' => true,
    'method_chaining_indentation' => true,
    'no_spaces_after_function_name' => true,
    'no_trailing_comma_in_singleline' => true,
    'no_multiple_statements_per_line' => true,
    'compact_nullable_type_declaration' => true,

    // control structures
    'elseif'     => true,
    'include'    => true,
    'no_unneeded_braces' => true,
    'simplified_if_return' => true,
    'no_superfluous_elseif' => true,
    'control_structure_braces' => true,
    'control_structure_continuation_position' => true,

    // casing
    'constant_case' => true,
    'lowercase_keywords' => true,
    'magic_method_casing' => true,
    'integer_literal_case' => true,
    'magic_constant_casing' => true,
    'native_function_casing' => true,
    'lowercase_static_reference' => true,
    'class_reference_name_casing' => true,
    'native_type_declaration_casing' => true,
    'native_function_type_declaration_casing' => true,

    // casting
    'cast_spaces' => true,
    'no_unset_cast' => true,
    'lowercase_cast' => true,
    'short_scalar_cast' => true,
    'no_short_bool_cast' => true,
]);

return $config;
