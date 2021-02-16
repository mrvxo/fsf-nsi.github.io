require "test_helper"

class LibCoreControllerTest < ActionDispatch::IntegrationTest
  test "should get add" do
    get lib_core_add_url
    assert_response :success
  end

  test "should get edit" do
    get lib_core_edit_url
    assert_response :success
  end

  test "should get matiere" do
    get lib_core_matiere_url
    assert_response :success
  end

  test "should get chapter" do
    get lib_core_chapter_url
    assert_response :success
  end
end
