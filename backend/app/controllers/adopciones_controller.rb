class AdopcionesController < ApplicationController
  before_action :set_adopcion, only: [:show, :update, :destroy]

  # GET /adopcions
  def index
    @adopcions = Adopcion.all

    render json: @adopcions
  end

  # GET /adopcions/1
  def show
    render json: @adopcion
  end

  # POST /adopcions
  def create
    @adopcion = Adopcion.new(adopcion_params)

    if !@adopcion.save
      render json: @adopcion.errors, status: :unprocessable_entity
    end
  end

  # PATCH/PUT /adopcions/1
  def update
    if @adopcion.update(adopcion_params)
      render json: @adopcion
    else
      render json: @adopcion.errors, status: :unprocessable_entity
    end
  end

  # DELETE /adopcions/1
  def destroy
    @adopcion.destroy
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_adopcion
      @adopcion = Adopcion.find(params[:id])
    end

    # Only allow a list of trusted parameters through.
    def adopcion_params
      params.permit(:especie, :sexo, :edad, :nombre, :descripcion)
    end
end
