require "test_helper"

class AdopcionsControllerTest < ActionDispatch::IntegrationTest
  setup do
    @adopcion = adopcions(:one)
  end

  test "should get index" do
    get adopcions_url, as: :json
    assert_response :success
  end

  test "should create adopcion" do
    assert_difference('Adopcion.count') do
      post adopcions_url, params: { adopcion: { descripcion: @adopcion.descripcion, edad: @adopcion.edad, especie: @adopcion.especie, nombre: @adopcion.nombre, sexo: @adopcion.sexo } }, as: :json
    end

    assert_response 201
  end

  test "should show adopcion" do
    get adopcion_url(@adopcion), as: :json
    assert_response :success
  end

  test "should update adopcion" do
    patch adopcion_url(@adopcion), params: { adopcion: { descripcion: @adopcion.descripcion, edad: @adopcion.edad, especie: @adopcion.especie, nombre: @adopcion.nombre, sexo: @adopcion.sexo } }, as: :json
    assert_response 200
  end

  test "should destroy adopcion" do
    assert_difference('Adopcion.count', -1) do
      delete adopcion_url(@adopcion), as: :json
    end

    assert_response 204
  end
end
