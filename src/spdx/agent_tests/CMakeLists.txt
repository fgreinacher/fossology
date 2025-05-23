#[=======================================================================[
SPDX-License-Identifier: GPL-2.0-only
SPDX-FileCopyrightText: © 2021 Avinal Kumar <avinal.xlvii@gmail.com>
#]=======================================================================]

if(NOT TARGET phpunit)
    prepare_phpunit()
endif()

add_custom_target(prepare_spdx_test ALL
    COMMENT "Preparing spdx test"
    COMMAND ln -sf "${CMAKE_CURRENT_BINARY_DIR}/../VERSION"
    COMMAND ln -sf "${FO_WRAPPER}" "${CMAKE_CURRENT_SOURCE_DIR}/../agent/spdx"
    COMMAND ln -sf "${CMAKE_CURRENT_BINARY_DIR}/../agent/gen/version.php" "${CMAKE_CURRENT_SOURCE_DIR}/../agent/version.php"
    WORKING_DIRECTORY ${CMAKE_CURRENT_SOURCE_DIR}/..)

add_test(NAME spdx_unit_test
    COMMAND ${PHPUNIT} --bootstrap ${PHPUNIT_BOOTSTRAP} ${CMAKE_CURRENT_LIST_DIR}/Unit/spdxutilTest.php)

add_test(NAME spdx_functional_scheduler_test
    COMMAND ${PHPUNIT} --bootstrap ${PHPUNIT_BOOTSTRAP} ${CMAKE_CURRENT_LIST_DIR}/Functional/schedulerTest.php)
