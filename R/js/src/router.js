
export default function Route (strEs, strEn) {
  const matchRoute = (route() === strEs || route() === strEn)
  return {
    use (Instance) {
      if (matchRoute) Instance.init()
    }
  }
}
